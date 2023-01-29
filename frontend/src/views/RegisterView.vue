<template>
    <div class="home">
      <form class="login-wrapper">
        <h1>Register</h1>
    
        <h2>Enter your email</h2>
        <input type="text" placeholder="email" v-model="login">
        <h2>Enter your password</h2>
        <input type="password" placeholder="password" v-model="password">
        <h2>Enter your last name </h2>
        <input type="text" placeholder="last name" v-model="last_name">
        <h2>Enter your first name </h2>
        <input type="text" placeholder="first name" v-model="first_name">
        <button @click="Register()" type="button">Register</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from 'axios'
  
  export default {
    data() {
          return {
              login: "",
              password: "",
              last_name: "",
              first_name: "",

          }
      },
    methods: {
      Register: function () {
        axios.post('http://localhost:8000/api/register', {
              email: this.login,
              password: this.password,
              last_name: this.last_name,
              first_name: this.first_name,
              is_admin: 0
            }) .then(function () {
                window.location.replace("/");
          }).catch(function (error) {
            alert(error)
          }
          )
      }
    }
  }
  </script>
  
  <style lang="sass" scoped>
  .home
    height: 100vh
    width: 100vw
    display: flex
    align-items: center
    justify-content: center
    .login-wrapper
      width: 30vw
      height: 80vh
      background-color: pink
      display: flex
      align-items: center
      justify-content: center
      flex-direction: column
      h3
        color: red
      button
        margin-top: 3vh
        margin-left: 10vw
  
  </style>
  