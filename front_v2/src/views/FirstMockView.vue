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
      ]
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

        //first type
        for (let index = 0; index < 7; index++) {
            if(this.input_ans[index].ans.toLowerCase() === this.answers[index]){
                type1++
            }
            
        }
        type1 = type1 / 0.07;
        //second type
        for (let index = 7; index < 13; index++) {
            if(this.input_ans[index].ans.toLowerCase() === this.answers[index]){
                type2++
            }
            
        }
        type2 = type2 / 0.06;
        //third type
        for (let index = 13; index < 18; index++) {
            if(this.input_ans[index].ans.toUpperCase() === this.answers[index]){
                type3++
            }
            
        }
        type3 = type3 / 0.05;
        //fourth type
        for (let index = 18; index < 23; index++) {
            if(this.input_ans[index].ans.toUpperCase() === this.answers[index]){
                type4++
            }
            
        }
        type4 = type4 / 0.05;
        //fivth type
        for (let index = 23; index < 26; index++) {
            if(this.input_ans[index].ans.toLowerCase() === this.answers[index]){
                type5++
            }
            
        }
        type5 = type5 / 0.03;
        //sixth type
        for (let index = 26; index < 31; index++) {
            if(this.input_ans[index].ans.toUpperCase() === this.answers[index]){
                type6++
            }
            
        }
        type6 = type6 / 0.05;
        //seventh type
        for (let index = 31; index < 36; index++) {
            if(this.input_ans[index].ans.toUpperCase() === this.answers[index]){
                type7++
            }
            
        }
        type7 = type7 / 0.05;
        //eighth type
        for (let index = 36; index < 40; index++) {
            if(this.input_ans[index].ans.toUpperCase() === this.answers[index]){
                type8++
            }
            
        }
        type8 = type8 / 0.04;
        let types_array = [type1, type2, type3, type4, type5,type6,type7,type8] 
        console.log(types_array)
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