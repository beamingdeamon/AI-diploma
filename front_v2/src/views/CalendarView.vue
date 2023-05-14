<template>
    <div>
        <Header />
        <div class="head-wrapper flex flex-col items-center mt-4">
            <h1 class="text-2xl">
            To up your score you must do {{schedule.total_exercises - schedule.exercises_done}} exercises
            </h1>
            <h1 class="text-xl mt-4">
                It's {{ex_per_day}} exercises per day
            </h1>
        </div>
        <div class="recomendation-wrapper mr-20 mt-5">
            <h1 class="text-xl">Analysing your recommendations, we recommend to revise the types of the questions below:</h1>
            <div class="recomendation-item" >
                {{this.sortedRes[0][0]}} : <span>{{parseInt(this.sortedRes[0][1])}}%</span> correct
            </div>
            <div class="recomendation-item" >
                {{this.sortedRes[1][0]}} : <span>{{parseInt(this.sortedRes[1][1])}}%</span> correct
            </div>
            <div class="recomendation-item" >
                {{this.sortedRes[2][0]}} : <span>{{parseInt(this.sortedRes[2][1])}}%</span> correct
            </div>
        </div>
        
    </div>
</template>

<script>
import Header from '../components/HeaderComponent.vue'
import axios from "axios"
export default {
    data: ()=>({
        mockResults: {},
        sortedRes: [],
        schedule : {},
        ex_per_day : 0,
        ex_types: {}
    }),
    components:{
        Header
    },
    methods:{
        getMockResults(){
            axios.get('http://localhost:1337/api/user-questions-statistics',{
              headers: {
                  Authorization: "Bearer 1538322b334657a8a270866536fe7f3f94d7dc68dc4e0609dc2eccefccfceddbcec3e0438d6abd159f230bfb7795bca378849691f05f0c970c1d3940e1c412ee533267db63b065c327956ba674794efca73eaef1c1a9e6762e49bf050cd4d68ddfbec98adb8cd808b1c731e36a65474010ebf894cdee5b9c1d9a9e883db341a9"
              }
          }) .then((response) =>{
            let index = 0;
            for (const item of response.data.data) {
                if(item.attributes.user_id === parseInt(window.localStorage.getItem("user_id"))){
                    console.log(response.data.data[index].attributes)
                    this.mockResults = response.data.data[index].attributes;
                }
                index++;
            }
            this.getExerciseTypes()

          })
        },
        getExerciseTypes(){
            axios.get('http://localhost:1337/api/question-types',{
              headers: {
                  Authorization: "Bearer 1538322b334657a8a270866536fe7f3f94d7dc68dc4e0609dc2eccefccfceddbcec3e0438d6abd159f230bfb7795bca378849691f05f0c970c1d3940e1c412ee533267db63b065c327956ba674794efca73eaef1c1a9e6762e49bf050cd4d68ddfbec98adb8cd808b1c731e36a65474010ebf894cdee5b9c1d9a9e883db341a9"
              }
          }) .then((response) =>{
            this.ex_types = response.data.data
            for (var vehicle in this.mockResults) {
                if(vehicle === "user_id" || vehicle === "createdAt" || vehicle === "updatedAt" || vehicle === "publishedAt" || vehicle === "mark"){
                    console.log("ok")
                }else{
                    let name
                    if(this.mockResults[vehicle]){
                        if(vehicle === "type1"){
                            name = this.ex_types[0].attributes.name
                        }else if(vehicle === "type2"){
                            name = this.ex_types[1].attributes.name
                        }else if(vehicle === "type3"){
                            name = this.ex_types[2].attributes.name
                        }else if(vehicle === "type4"){
                            name = this.ex_types[3].attributes.name
                        }else if(vehicle === "type5"){
                            name = this.ex_types[4].attributes.name
                        }else if(vehicle === "type6"){
                            name = this.ex_types[5].attributes.name
                        }else if(vehicle === "type7"){
                            name = this.ex_types[6].attributes.name
                        }else if(vehicle === "type8"){
                            name = this.ex_types[7].attributes.name
                        }
                        this.sortedRes.push([name, this.mockResults[vehicle]]);
                    }
                }
            }
            this.sortedRes.sort(function(a, b) {
                return a[1] - b[1];
            });
          })
        },
        getSchedule(){
            axios.get('http://localhost:1337/api/user-study-schedules',{
              headers: {
                  Authorization: "Bearer 1538322b334657a8a270866536fe7f3f94d7dc68dc4e0609dc2eccefccfceddbcec3e0438d6abd159f230bfb7795bca378849691f05f0c970c1d3940e1c412ee533267db63b065c327956ba674794efca73eaef1c1a9e6762e49bf050cd4d68ddfbec98adb8cd808b1c731e36a65474010ebf894cdee5b9c1d9a9e883db341a9"
              }
          }) .then((response) =>{
            let index = 0;
            for (const item of response.data.data) {
                if(item.attributes.user_id === parseInt(window.localStorage.getItem("user_id"))){
                    this.schedule = response.data.data[index].attributes;
                }
                index++;
                let difference =  new Date(this.schedule.end_date).getTime() - new Date(this.schedule.start_date).getTime();
                let days = Math.ceil(difference / (1000 * 3600 * 24));
                this.ex_per_day = parseInt(this.schedule.total_exercises / days)
            }
          })
        }
    },
    mounted(){
        this.getMockResults()
        this.getSchedule()
    }
}
</script>

<style lang="sass" scoped>
.recomendation-wrapper
    float: right
    h1
        width: 38vw
    .recomendation-item
        margin-top: 2vh
        width: 40vw
        padding: 10px 20px 10px 20px
        border: 1px solid gray
        border-radius: 10px
        span
            color: red
</style>