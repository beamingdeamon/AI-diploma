<template>
  <body>
      
      <div class="menu-bar">
        <ul>
            <li><a href="/?">Home</a></li>
            <li><a href="#">My lesson plan</a></li>
            <li><a href="#">Extra tasks</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
      </div>
        <div class="menu-item">
          <img src="logo.png" alt="menu-logo">
        </div>
        <div class="menu-item">
      
          <button><a href="/?">Log in</a></button>
        </div>
      <div class="container">
        <form>
          <h1 style="color: black; font-family: Garamond, sans-serif; font-size: 36px!important; font-weight: 700!important; text-shadow: 2px 2px #ddd; 
        letter-spacing: 2px; margin-bottom: 50px!important; margin-top: 25px!important; text-align: center!important;">Registration form</h1>
          <div class="form-group">
            <label for="first-name">First Name:</label>
            <input type="text" name="first-name" id="first-name" placeholder="Enter your first name" required>
          </div>
          <div class="form-group">
            <label for="last-name">Last Name:</label>
            <input type="text" name="last-name" id="last-name" placeholder="Enter your last name" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter your email address" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
          </div>
          <div class="form-group">
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm your password" required>
          </div>
          <div class="form-group">
            <label for="birthdate">Date of Birth:</label>
            <input type="date" name="birthdate" id="birthdate">
          </div>
          <div class="form-group">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="non-binary">Non-binary</option>
            </select>
          </div>

          <div class="form-group">
            <a href="/mocks"><button @click="Register()">
           
            <span class="transition"></span>
            <span class="gradient"></span>
            <span class="btn">Create account</span>
      
            </button></a>
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
    height: 140px
   
    display: flex
    
    justify-content: space-between
    padding: 0 20px
    .menu-logo
      display: flex
      flex-grow: 1
      

    .menu-logo img
      height: 120px
      width: auto
      position: relative
      
      visibility: visible
    .menu-bar
      background-color: #ffffff
      width: 100%
      height: 140px
      display: flex
      justify-content: center
      align-items: center
      position: fixed
      text-align: center
      padding: 10px 
      z-index: 9999
    .menu-item 
      display: flex
      flex-grow: 1
      text-decoration: none
      position: relative
      

    .menu-item img
      height: 120px
      width: auto
      position: absolute
      visibility: visible
    .menu-bar ul
        list-style: none
        margin: 0
        padding: 0
        text-decoration: none   
    .menu-bar li
        display: inline-block
        margin: 0 50px


    .menu-bar a
        color: black
        font-family: "Garamond", serif
        font-size: 28px
        font-weight: bold
        text-decoration: none   
        
    
    .menu-item 
      flex: 0 0 auto
      display: flex
      
      align-items: center
      text-decoration: none
      z-index: 9999 
      


    .menu-item button
      background-color: black
      border: 2px solid black
      color: white
      font-size: 36px
      padding: 10px 20px
      margin-left: 20px
      cursor: pointer
      font-family: "Garamond", serif
      margin-top: -15px
      font-weight: bold
      text-decoration: none
      z-index: 9999
      
    .menu-item button a:visited
      color: white
      text-decoration: none
      
    


  .container
    background-color: white
    border-radius: 10px
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22)
    padding: 40px
    width: 80%
    max-width: 700px
    text-align: center
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1)
    display: inline-block
    margin: 0 auto
    position: absolute
    top: 50%
    left: 50%
    transform: translate(-50%, -50%)
    margin-top: 120px
    z-index: 1

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
    position: relative
  
  label
    position: absolute
    top: -10px
    left: 16px
    transform: translateY(-50%)
    background-color: white
    padding: 0 4px
    font-size: 18px
    margin-bottom: 5px
    font-weight: bold
    display: block
    color: black
    font-family: "Garamond", serif
  


  input[type="text"],
  input[type="email"],
  input[type="password"],
  input[name="last-name"],
  input[name="first-name"],
  input[type="date"],
  
  select
    border: 1px solid #dadce0
    border-radius: 4px
    box-shadow: 0 0 0 transparent
    font-family: "Garamond", serif
    font-size: 28px
    line-height: 30px
    outline: transparent
    padding: 11px 16px
    transition: border .3s,box-shadow .3s
    width: 100%
    box-sizing: border-box
    align-self: right
    position: relative
   

  input[type="text"]:focus,
  input[type="email"]:focus,
  input[type="password"]:focus,
  input[name='last-name']:focus,
  input[name='first-name']:focus,
  select:focus
    border: 2px solid #00239c!important
    padding: 11px 16px
    transition: border .3s,box-shadow .3s
    width: 100%
    box-sizing: border-box
    align-self: left

  button

    font-family: "Garamond", serif
    font-size: 36px
    font-weight: 500
    background: #1F2937
    color: white
    border: none
    position: relative
    overflow: hidden
    border-radius: 4px
    padding: 11px 100px
    button-height: 30px
    margin-top: 50px
    cursor: pointer
    font-weight: bold

  .gradient
    position: absolute
    width: 100%
    height: 100%
    left: 0
    top: 0
    border-radius: 4px
    margin-top: -0.25em
    background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3))

  .btn
    position: relative
    top: -1px
    

  .transition
    transition-timing-function: cubic-bezier(0, 0, 0.2, 1)
    transition-duration: 500ms
    background-color: rgba(0, 0, 0, 1.0)
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
  
 
  