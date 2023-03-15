<template>
  <body>
    

    <div class="container">
      <form>
        <h1 style="color: black; font-family: Open Sans, sans-serif; font-size: 36px;  text-shadow: 2px 2px #ddd; 
        letter-spacing: 2px; margin-bottom: 40px;">Welcome to an IELTS tracker!</h1>
        
          
        <div class="form-group">

          <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill= #00239c viewBox="0 0 16 16">
          <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"></path>
          </svg>
          <input type="text" placeholder="Email">
        </div>
        <div class="form-group">
          <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill= #00239c viewBox="0 0 16 16">
          <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
          </svg>
          <input type="password" id="password-field" placeholder="Password">
        
        </div>
        <div class="form-group">
          <a href="/mocks"><button>
          <span class="transition"></span>
          <span class="gradient"></span>
          <span class="btn">Log In</span>
          </button></a>
        </div>
      </form>
    <p style="font-family: Open Sans, sans-serif;"> Don't have an account? <a style= "font-family: Open Sans, sans-serif; font-weight: bold;" href="/register">Sign up!</a></p>
    </div>
    </body>
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
        axios.post('http://localhost:8000/api/login',  {
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
  body
    
    background-image: url("C:\Users\kudab\OneDrive\Рабочий стол\KIMEP senior\AI-diploma\frontend\public\bk.jpg")
    background-size: cover
    background-repeat: no-repeat
    background-attachment: fixed
    height: 100vh
    display: flex
    align-items: center
    justify-content: center


  .container
    background-color: white
    border-radius: 10px
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22)
    padding: 40px
    width: 80%
    max-width: 500px
    text-align: center
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1)
    display: inline-block
    margin: 0 auto
    position: absolute
    top: 50%
    left: 50%
    transform: translate(-50%, -50%)

  .container:hover
    box-shadow: 0 30px 38px rgba(0,35, 156, 0.3), 0 30px 12px rgba(0,35, 156, 0.22)
    align-content: center
    align-items: center
    align-self: center

  .form-group
    margin-bottom: 20px
    align-self: center
    align-items: center
    text-align: center
    display: flex
    justify-content: center
    color: white
    margin-right: 30px
    
  


  input[type="text"],
  input[type="password"], 
    border: none
    font-family: "Open Sans", sans-serif
    border-bottom: 2px solid #ddd
    background-color: transparent
    outline: none
    height: 40px
    width: 80%
    font-size: 24px
    color: #00239c
    transition: all 0.3s

  input[type="text"]:focus,
  input[type="password"]:focus
    border-bottom: 2px solid #00239c
    color: #00239c

  button

    font-family: "Open Sans", sans-serif
    font-size: 17px
    padding: 1em 2.7em
    font-weight: 500
    background: #1F2937
    color: white
    border: none
    position: relative
    overflow: hidden
    border-radius: 0.6em

  .gradient
    position: absolute
    width: 100%
    height: 100%
    left: 0
    top: 0
    border-radius: 0.6em
    margin-top: -0.25em
    background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3))

  .btn
    position: relative
    top: -1px

  .transition
    transition-timing-function: cubic-bezier(0, 0, 0.2, 1)
    transition-duration: 500ms
    background-color: rgba(0,35, 156, 1.00)
    border-radius: 9999px
    width: 0
    height: 0
    position: absolute
    left: 50%
    top: 50%
    transform: translate(-50%, -50%)

  button:hover .transition
    width: 14em
    height: 14em

  button:active
    transform: scale(0.97)
  </style>

