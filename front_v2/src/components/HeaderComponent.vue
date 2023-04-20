<template>
    <div class="w-full h-20 bg-gray flex justify-around flex-row items-center">
        <div>
            <h1 class="text-indigo-500 text-2xl">IELTS tracker</h1>
        </div>
        <div>
            <a href="/" class="mr-8 text-xl">
                Home
            </a>
            <a href="/about" class="mr-8 text-xl">
                About Us
            </a>
            <a href="/contacts" class="mr-8 text-xl">
                Contacts
            </a>
            <button v-if="!isRegisterPage && !isLogin" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg" @click="goToReg">
                Register
            </button>
            <button v-if="isRegisterPage && !isLogin" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg" @click="goToLogIn">
                Log In
            </button>
            <button v-if="isLogin" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg" @click="logout">
                Logout
            </button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isRegisterPage: false,
            isLogin : false
        }
    },
    methods: {
        goToReg(){
            this.$router.push('/register')
            this.$router.go()
        },
        goToLogIn(){
             this.$router.push('/')
             this.$router.go()
        },
        logout(){
            window.localStorage.clear()
            this.$router.go()
        }
    },
    mounted() {
        if(this.$route.name != "main"){
            this.isRegisterPage = true
        }
        if(window.localStorage.getItem("token")){
            this.isLogin = true
        }
    },
}
</script>

<style lang="sass" scoped>
</style>
