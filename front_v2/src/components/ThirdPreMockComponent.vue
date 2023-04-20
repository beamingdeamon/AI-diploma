<template>
    <div class="slide-wrapper">
        <div class="container">
            <h1 class="text-white">
                Duration: 60 min <br> 
                Number of passages: 3 <br>
                Number of attempts: 1 
            </h1>
            <button class="bg-white hover:bg-slate-300 text-indigo-500 font-bold py-2 px-4 rounded-lg" @click="SecondSlide">
                    START THE TEST
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
            window.localStorage.removeItem('slide')
            this.$router.go()
        },
        comeBack(){
            window.localStorage.setItem('slide', 2)
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