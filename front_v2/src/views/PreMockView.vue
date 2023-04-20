<template>
    <div class="bg-indigo-500 wrapper">
        <div class="header">
            <router-link to="/">
                <h1 class="text-white text-2xl">IELTS tracker</h1>
            </router-link>
        </div>
        <FirstSlide v-if="!this.slide || this.slide == 1" />
        <SecondSlide v-if="this.slide == 2" />
        <ThirdSlide v-if="this.slide == 3" />
    </div>
</template>

<script>
import FirstSlide from '../components/FirstPreMockComponent.vue'
import SecondSlide from '../components/SecondPreMockComponent.vue'
import ThirdSlide from '../components/ThirdPreMockComponent.vue'
export default {
    data() {
        return {
            slide: null
        }
    },
    components: {
        FirstSlide,
        SecondSlide,
        ThirdSlide
    },
    mounted() {
        this.slide = window.localStorage.getItem("slide")
    },
}
</script>

<style lang="sass" scoped>
.wrapper
    width: 100vw
    height: 100vh
    .header
        width: 100vw
        height: 10vh
        display: flex
        align-items: center
        h1
            cursor: pointer
            margin-left: 15vw
</style>