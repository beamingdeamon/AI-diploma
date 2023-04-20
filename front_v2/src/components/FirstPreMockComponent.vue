<template>
    <div class="slide-wrapper">
        <div class="container">
            <h1 class="text-white">Before starting the course it is essential to understand <br> your current level. Based on the results we will generate <br> you individual study plan.</h1>
            <button class="bg-white hover:bg-slate-300 text-indigo-500 font-bold py-2 px-4 rounded-lg" @click="SecondSlide">
                    TAKE THE TEST
            </button>
        </div>
        
    </div>
</template>

<script>
export default {
    methods: {
        SecondSlide(){
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
            margin-top: 8vh
</style>