<template>
    <div class="wrapper">
        <div class="container">
            <h1>Your score is <span class="text-xl font-bold">{{this.mark}}</span></h1>
            <div class="input-container">
                <h2>Choose your target score</h2>
                <input type="text" v-model="target">
            </div>
            <div class="input-container">
                <h2>Choose start date</h2>
                <input type="date" v-model="start_date">
            </div>
            
            <div class="input-container">
                <h2>Choose end date</h2>
                <input type="date" v-model="end_date">
            </div>
            <button @click="submit">Submit</button>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
     data: ()=>({
        target: 0,
        start_date: "",
        end_date: "",
        mark : 0
        
    }),
    mounted(){
        this.mark = window.localStorage.getItem("mark")
    },
    methods:{
        submit(){
            let array = {
                "1.0": 10,
                "2.0": 22.5,
                "3.0": 75,
                "4.0": 75,
                "4.5": 75,
                "5.0": 105,
                "5.5": 125,
                "6.0": 137.5,
                "6.5": 150,
                "7.0": 175,
                "7.5": 200,
                "8.0": 250,
                "9.0": 250
            };
            let first_exerc = 0;
            let second_exerc = 0;
            for (const key in array) {
                if (parseFloat(key) == parseFloat(this.mark)) {
                    console.log(key)
                    first_exerc = array[key];
                }
                if (parseFloat(key) == parseFloat(this.target)) {
                    console.log(key)
                    second_exerc = array[key];
                }
            }
            let exercises_needed = second_exerc - first_exerc;
            
            console.log(exercises_needed)
            axios.post('http://localhost:1337/api/user-study-schedules',{
                data: {
                    "user_id": localStorage.getItem("user_id"),
                    "start_date" : this.start_date,
                    "end_date" : this.end_date,
                    "total_exercises" : exercises_needed,
                    "exercises_done" : 0
                }
            },{
                headers: {
                    Authorization: "Bearer 1538322b334657a8a270866536fe7f3f94d7dc68dc4e0609dc2eccefccfceddbcec3e0438d6abd159f230bfb7795bca378849691f05f0c970c1d3940e1c412ee533267db63b065c327956ba674794efca73eaef1c1a9e6762e49bf050cd4d68ddfbec98adb8cd808b1c731e36a65474010ebf894cdee5b9c1d9a9e883db341a9"
                }
            }) .then(() =>{
                window.location.replace("/calendar")
            })
        }
    }
}
</script>

<style lang="sass" scoped>
.wrapper
    width: 100vw
    height: 100vh
    display: flex
    align-items: center
    justify-content: center
    .container
        width: 20vw
        height: 35vh
        display: flex
        flex-direction: column
        align-items: center
        .input-container
            margin-top: 2vh
            display: flex
            align-items: center
            flex-direction: column
            input
                padding: 10px
                border: 1px solid gray
                border-radius: 10px
        button
            padding: 10px 20px 10px 20px
            border: 1px solid gray
            border-radius: 10px
            margin-top: 5vh
            margin-left: 16vw
</style>