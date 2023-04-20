<template>
    <div class="flex flex-col items-center justify-center">
        <div class="w-1/3 flex items-center flex-col">
            <h1 class="font-bold text-4xl text-indigo-500 mt-28">Registration form</h1>
            <form action="" class="w-full flex flex-col items-center justify-center">
                <input required v-model="first_name" class="mt-6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-2/3 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="text" placeholder="First Name">
                <input  required v-model="last_name" class="mt-6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-2/3 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="text" placeholder="Second Name">
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
            first_name : "",
            last_name : "",
            password : "",
            is_admin : 0
        }
    },
    methods: {
        register(){
            axios.post('http://localhost:8000/api/register', {
              email: this.email,
              password: this.password,
              last_name: this.last_name,
              first_name: this.first_name,
              is_admin: this.is_admin
            }) .then(function () {
                window.location.replace("/");
          }).catch(function (error) {
            alert(error)
          })
        }
    },
}
</script>