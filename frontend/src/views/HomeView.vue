<template>
  <div class="home">
    <form class="login-wrapper">
      <h1>Login</h1>
      <h3 v-show="is_error === 1">Неверный логин или пароль</h3>
      <h2>Enter your login</h2>
      <input type="text" placeholder="login" v-model="login">
      <h2>Enter your password</h2>
      <input type="password" placeholder="password" v-model="password">
      <button @click="Login()" type="button">Login</button>
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
      is_error: 0
		}
	},
  methods: {
    Login: function () {
      axios.post('http://localhost:8000/api/login', {
			email: this.login,
			password: this.password
          }) .then(function (response) {
          window.localStorage.setItem("token", response.data.accessToken)
          // window.localStorage.getItem("token")
          // window.localStorage.removeItem("token")
          window.location.replace("/mocks");
        }).catch(function () {
          alert("Неверный логин или пароль")
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
    height: 60vh
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
