<template>
    <div class="flex flex-col items-center justify-center">
        <div class="w-1/3 flex items-center flex-col">
            <h1 class="font-bold text-4xl text-indigo-500 mt-28">Registration form</h1>
            <form action="" class="w-full flex flex-col items-center justify-center">
                <input required v-model="username" class="mt-6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-2/3 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="text" placeholder="Username">
                <input  required v-model="email" class="mt-6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-2/3 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="text" placeholder="E-mail">
                <input minlength="6" required v-model="password" class="mt-6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-2/3 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="Password">
                <button class="mt-10 shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button" @click="register">
                    Sign Up
                </button>
            </form>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data() {
        return {
            email : "",
            username : "",
            password : "",
            is_admin : 0
        }
    },
    methods: {
        register(){
            axios.post('http://localhost:1337/api/auth/local/register', {
              email: this.email,
              password: this.password,
              username: this.username,
            },{
                headers: {
                    Authorization: "Bearer 1538322b334657a8a270866536fe7f3f94d7dc68dc4e0609dc2eccefccfceddbcec3e0438d6abd159f230bfb7795bca378849691f05f0c970c1d3940e1c412ee533267db63b065c327956ba674794efca73eaef1c1a9e6762e49bf050cd4d68ddfbec98adb8cd808b1c731e36a65474010ebf894cdee5b9c1d9a9e883db341a9"
                }
            }) .then(function (){
                window.location.replace("/");
            }).catch(function (error) {
            alert(error)
          })
        }
    },
}
</script>