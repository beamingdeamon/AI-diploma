<template>
  <body>
      
      <div class="container">
        <form>
          <h1 style="color: black; font-family: Open Sans, sans-serif; font-size: 36px;  text-shadow: 2px 2px #ddd; 
        letter-spacing: 2px; margin-bottom: 40px;">Registration form</h1>
          <div class="form-group">
            <input type="text" placeholder="First Name">
          </div>
          <div class="form-group">
            <input type="text" placeholder="Second Name">
          </div>
          <div class="form-group">
            <input type="text" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <input type="password" placeholder="Confirm Password">
          </div>
          
          <div class="form-group">
            <button @click="Register()">
            <span class="transition"></span>
            <span class="gradient"></span>
            <span class="btn">Register</span>
      
            </button>
        </div>
        
      </form>
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
  body
    
   
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
    box-shadow: 0 10px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22)
    padding: 40px
    width: 80%
    max-width: 500px
    text-align: center
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1)
    display: inline-block
    margin-top: 50px
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

  input[type="text"],
  input[type="password"],
  input[name='last_name'],
  input[name='first_name']
    border: none
    font-family: "Open Sans", sans-serif
    border-bottom: 2px solid #ddd
    
    background-color: transparent
    outline: none
    height: 40px
    width: 100%
    font-size: 24px
    color: #00239c
    transition: all 0.3s

  input[type="text"]:focus,
  input[type="password"]:focus,
  input[name='last_name']:focus,
  input[name='first_name']:focus
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
  
 
  