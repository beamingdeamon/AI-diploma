<template>
    <div class="container">
        <div class="pdf-wrapper">
            <iframe src="https://drive.google.com/file/d/16n-uop9gZW4LG_9bFKJ0haUxzf6bUkqZ/preview" class="pdf" frameborder="0"></iframe>
            <iframe src="https://drive.google.com/file/d/1iHquJQYp1rY4NeIgFEN3wjltWAmCFaEE/preview" class="pdf" frameborder="0"></iframe>
        </div>
        <div class="input-container">
            <div class="input-item"><h2>1</h2><input type="text" v-model="input_ans[0].ans"></div>
            <div class="input-item"><h2>2</h2><input type="text" v-model="input_ans[1].ans"></div>
            <div class="input-item"><h2>3</h2><input type="text" v-model="input_ans[2].ans"></div>
            <div class="input-item"><h2>4</h2><input type="text" v-model="input_ans[3].ans"></div>
            <div class="input-item"><h2>5</h2><input type="text" v-model="input_ans[4].ans"></div>
            <div class="input-item"><h2>6</h2><input type="text" v-model="input_ans[5].ans"></div>
            <div class="input-item"><h2>7</h2><input type="text" v-model="input_ans[6].ans"></div>
            <div class="input-item"><h2>8</h2><input type="text" v-model="input_ans[7].ans"></div>
            <div class="input-item"><h2>9</h2><input type="text" v-model="input_ans[8].ans"></div>
            <div class="input-item"><h2>10</h2><input type="text" v-model="input_ans[9].ans"></div>
            <div class="input-item"><h2>11</h2><input type="text" v-model="input_ans[10].ans"></div>
            <div class="input-item"><h2>12</h2><input type="text" v-model="input_ans[11].ans"></div>
            <div class="input-item"><h2>13</h2><input type="text" v-model="input_ans[12].ans"></div>
            <div class="input-item"><h2>14</h2><input type="text" v-model="input_ans[13].ans"></div>
            <div class="input-item"><h2>15</h2><input type="text" v-model="input_ans[14].ans"></div>
            <div class="input-item"><h2>16</h2><input type="text" v-model="input_ans[15].ans"></div>
            <div class="input-item"><h2>17</h2><input type="text" v-model="input_ans[16].ans"></div>
            <div class="input-item"><h2>18</h2><input type="text" v-model="input_ans[17].ans"></div>
            <div class="input-item"><h2>19</h2><input type="text" v-model="input_ans[18].ans"></div>
            <div class="input-item"><h2>20</h2><input type="text" v-model="input_ans[19].ans"></div>
            <div class="input-item"><h2>21</h2><input type="text" v-model="input_ans[20].ans"></div>
            <div class="input-item"><h2>22</h2><input type="text" v-model="input_ans[21].ans"></div>
            <div class="input-item"><h2>23</h2><input type="text" v-model="input_ans[22].ans"></div>
            <div class="input-item"><h2>24</h2><input type="text" v-model="input_ans[23].ans"></div>
            <div class="input-item"><h2>25</h2><input type="text" v-model="input_ans[24].ans"></div>
            <div class="input-item"><h2>26</h2><input type="text" v-model="input_ans[25].ans"></div>
            <div class="input-item"><h2>27</h2><input type="text" v-model="input_ans[26].ans"></div>
            <div class="input-item"><h2>28</h2><input type="text" v-model="input_ans[27].ans"></div>
            <div class="input-item"><h2>29</h2><input type="text" v-model="input_ans[28].ans"></div>
            <div class="input-item"><h2>30</h2><input type="text" v-model="input_ans[29].ans"></div>
            <div class="input-item"><h2>31</h2><input type="text" v-model="input_ans[30].ans"></div>
            <div class="input-item"><h2>32</h2><input type="text" v-model="input_ans[31].ans"></div>
            <div class="input-item"><h2>33</h2><input type="text" v-model="input_ans[32].ans"></div>
            <div class="input-item"><h2>34</h2><input type="text" v-model="input_ans[33].ans"></div>
            <div class="input-item"><h2>35</h2><input type="text" v-model="input_ans[34].ans"></div>
            <div class="input-item"><h2>36</h2><input type="text" v-model="input_ans[35].ans"></div>
            <div class="input-item"><h2>37</h2><input type="text" v-model="input_ans[36].ans"></div>
            <div class="input-item"><h2>38</h2><input type="text" v-model="input_ans[37].ans"></div>
            <div class="input-item"><h2>39</h2><input type="text" v-model="input_ans[38].ans"></div>
            <div class="input-item"><h2>40</h2><input type="text" v-model="input_ans[39].ans"></div>
        </div>
        <button @click="checkAns">Check Results</button>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data() {
    return {
      answers: ["v","iii", "viii", "i", "iv", "vi", "ii", "pirates", "food", "oil", "settlers","species","eggs", "C","B","E","A","C","B","D","A","C","A","flavour","size","salt","D","A","A","C","A","NO","NOT GIVEN","YES","NO","NOT GIVEN","F","D","E","B"],
      input_ans: [
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
        {ans : ""},
      ],
    results: []
    }
  },methods:{
    checkAns(){
        let type1 = 0
        let type2 = 0
        let type3 = 0
        let type4 = 0
        let type5 = 0
        let type6 = 0
        let type7 = 0
        let type8 = 0
        let answers = 0
        //first type
        for (let index = 0; index < 7; index++) {
            if(this.input_ans[index].ans.toLowerCase() === this.answers[index]){
                type1++
                answers++
            }
            
        }
        type1 = type1 / 0.07;
        //second type
        for (let index = 7; index < 13; index++) {
            if(this.input_ans[index].ans.toLowerCase() === this.answers[index]){
                type2++
                answers++
            }
            
        }
        type2 = type2 / 0.06;
        //third type
        for (let index = 13; index < 18; index++) {
            if(this.input_ans[index].ans.toUpperCase() === this.answers[index]){
                type3++
                answers++
            }
            
        }
        type3 = type3 / 0.05;
        //fourth type
        for (let index = 18; index < 23; index++) {
            if(this.input_ans[index].ans.toUpperCase() === this.answers[index]){
                type4++
                answers++
            }
            
        }
        type4 = type4 / 0.05;
        //fivth type
        for (let index = 23; index < 26; index++) {
            if(this.input_ans[index].ans.toLowerCase() === this.answers[index]){
                type5++
                answers++
            }
            
        }
        type5 = type5 / 0.03;
        //sixth type
        for (let index = 26; index < 31; index++) {
            if(this.input_ans[index].ans.toUpperCase() === this.answers[index]){
                type6++
                answers++
            }
            
        }
        type6 = type6 / 0.05;
        //seventh type
        for (let index = 31; index < 36; index++) {
            if(this.input_ans[index].ans.toUpperCase() === this.answers[index]){
                type7++
                answers++
            }
            
        }
        type7 = type7 / 0.05;
        //eighth type
        for (let index = 36; index < 40; index++) {
            if(this.input_ans[index].ans.toUpperCase() === this.answers[index]){
                type8++
                answers++
            }
            
        }
        type8 = type8 / 0.04;
        let types_array = [type1, type2, type3, type4, type5,type6,type7,type8] 
        let user_id = window.localStorage.getItem("user_id")
        console.log(types_array)
        let mark = 0
        if(answers === 39 || answers === 40){
            mark = 9.0
        }else if(answers === 37 || answers === 38){
            mark = 8.5
        }else if(answers === 35 || answers === 36){
            mark = 8.0
        }else if(answers === 33 || answers === 34){
            mark = 7.5
        }else if(answers === 30 || answers === 31 || answers === 32){
            mark = 7.0
        }else if(answers === 27 || answers === 28 || answers === 29 ){
            mark = 6.5
        }else if(answers === 26 || answers === 25 || answers === 23 ){
            mark = 6.0
        }else if(answers === 22 || answers === 21 || answers === 20 || answers === 19 ){
            mark = 5.5
        }else if(answers === 18 || answers === 17 || answers === 16 || answers === 15 ){
            mark = 5.0
        }else if(answers === 14 || answers === 13 ){
            mark = 4.5
        }else if(answers === 10 || answers === 11 || answers === 12 ){
            mark = 4.0
        }else if(answers === 8 || answers === 9 ){
            mark = 3.5
        }else if(answers === 6 || answers === 7 ){
            mark = 3.0
        }else if(answers === 4 || answers === 5 ){
            mark = 2.5
        }else if(answers === 3 || answers === 2 ){
            mark = 2.0
        }
        localStorage.setItem("mark" , mark)
        axios.post('http://localhost:1337/api/user-questions-statistics', {
            data:{
                user_id: user_id,
                type1 : types_array[0],
                type2 : types_array[1],
                type3 : types_array[2],
                type4 : types_array[3],
                type5 : types_array[4],
                type6 : types_array[5],
                type7 : types_array[6],
                type8 : types_array[7],
                mark : mark
            }
            
          },{
              headers: {
                  Authorization: "Bearer 1538322b334657a8a270866536fe7f3f94d7dc68dc4e0609dc2eccefccfceddbcec3e0438d6abd159f230bfb7795bca378849691f05f0c970c1d3940e1c412ee533267db63b065c327956ba674794efca73eaef1c1a9e6762e49bf050cd4d68ddfbec98adb8cd808b1c731e36a65474010ebf894cdee5b9c1d9a9e883db341a9"
              }
          }) .then(function (){
            window.location.replace('/config-calendar')
          }).catch(function () {
            alert("Неверный логин или пароль")
        })
    }
  }
}
</script>

<style lang="sass" scoped>
.container
    margin-left: 10vw
    width: 80vw
    height: 100%
    display: flex
    align-items: center
    justify-content: center
    flex-direction: column
    .pdf-wrapper
        margin-top: 5vh
        width: 100%
        height: 65vh
        display: flex
        flex-direction: row
        justify-content: space-around
        .pdf
            height: 100%
            width: 40%
    .input-container
        display: grid
        grid-template-columns: 1fr 1fr 1fr 1fr
        .input-item
            margin-right: 1vw
            margin-left: 1vw
            margin-top: 2vh
            width: 100%
            display: flex
            flex-direction: row
            h2
                margin-right: 1vw
            input
                border: 1px solid gray
    button
        border-radius: 10px
        margin-top: 4vh
        margin-bottom: 4vh
        padding: 10px
        background-color: green
</style>