<template>
    <div class="slide-wrapper">
        <div class="container">
            <h1 class="text-white">
                Please, make sure you are taking the test in a quiet<br>
                 environment where you can focus on the task. <br>
                 <h2>
                    Do not leave any empty spaces in the answer sheet<br>
                    Check your spelling before submitting the answers<br>
                    Do not get any help. Do it yourself!
                 </h2>
                 <h3>
                    The mock test can be taken only once. <br>
                You will NOT have the second chance to take it.
                 </h3>
                  
            </h1>
            <button class="bg-white hover:bg-slate-300 text-indigo-500 font-bold py-2 px-4 rounded-lg" @click="SecondSlide">
                    OK
            </button>
            <div class="come_back" @click="comeBack">
                I will come back later
            </div>
        </div>
        
    </div>
</template>

<script>
export default {
    methods: {
        SecondSlide(){
            window.localStorage.setItem('slide', 3)
            this.$router.go()
        },
        comeBack(){
            window.localStorage.setItem('slide', 1)
            this.$router.go()
        }
    },
}
</script>

<style lang="sass" scoped>
.slide-wrapper
    width: 100vw
    height: 60vh
    display: flex
    align-items: center
    justify-content: center
    .container
        display: flex
        flex-direction: column
        width: 70%
        align-items: center
        margin-top: 18vh
        h1
            font-size: 2.5rem
            text-align: center
            h2
                text-align: center
                margin-top: 6vh
            h3
                color: #F0940A
                margin-top: 5vh
                font-weight: 600
                font-size: 1.3rem

        button
            margin-top: 6vh
            padding-left: 4vw
            padding-right: 4vw
        .come_back
            color: white
            font-size: 1.3rem
            cursor: pointer
            margin-top: 4vh
            text-decoration: underline
</style>