<template>
  
  <body>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
   
    <div class="menu-bar">
      <ul>
          <li class ="logotype1"><a href="/?">                    <div><b>IELTS</b>planner</div>
          <span>Listening & Reading</span>
          </a></li>
          <li><a href="/?">Home</a></li>
          <li><a href="#">My lesson plan</a></li>
          <li><a href="#">Extra tasks</a></li>
          <li><a href="#">Contact</a></li>
          <li><button><a href="/register">Register</a></button></li>
      </ul>
      
      <!-- <a href="/?" class="logotype1">                        
          <div><b>IELTS</b>planner</div>
          <span>Listening & Reading</span>
      </a> -->
      <!-- <div class="menu-logo">
          <p style="font-family: 'DM sans', sans-serif; font-weight: bold; font-size: 30px; margin-left: 40%;"><a href="/?">IELTS tracker</a></p>
      </div> -->
    </div>
    <!-- <div class="menu-buttons">
     
      <button><a href="/register">Register</a></button>
    </div> -->
    <div class="container">
      <form>

        <h1 style="color: black; font-family:'DM Sans', sans-serif; font-size: 36px!important; font-weight: 700!important; text-shadow: 2px 2px #ddd; 
        letter-spacing: 2px; margin-bottom: 50px!important; margin-top: 25px!important; text-align: center!important; color: #423FE5;">Welcome to IELTS Planner!</h1>
        
          
        <div class="form-group">

          <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill= black viewBox="0 0 16 16">
          <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"></path>
          </svg>
          <input type="text" placeholder="Email">
        </div>
        <div class="form-group">
          <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill= black viewBox="0 0 16 16">
          <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
          </svg>
          <input type="password" id="password-field" placeholder="Password">
        
        </div>
        <button><a href="/mocks">Log in</a></button>
      </form>
    <p style="font-family: 'DM Sans', sans-serif; font-size: 28px;"> Don't have an account? <a style= "font-family: Garamond, serif; font-weight: bold; font-size: 28px;" href="/register">Sign up!</a></p>
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
    background-color: #EEEEEE
    background-attachment: fixed
    height: 100vh
    width: 100%
    display: flex
    justify-content: space-between
  
    .menu-bar
      background-color: #EEEEEE
      
      width: 100%
      height: 100px
      display: flex
      flex-direction: row
      align-items: center
      position: fixed
      z-index: 10
     
    .menu-bar ul
        list-style: none
        align-content: center
        // padding: 0px 100px
        text-decoration: none 
        position: absolute
        flex-direction: row
        right: 37px   
    .menu-bar li
        display: inline-block
        margin-right: 37px
        

    .menu-bar a
        color: black
        text-decoration: none  
        font-family: 'DM Sans', sans-serif
        font-weight: 400
        font-size: 26px
    .menu-bar a:hover
        text-shadow: 0 0 10px #FFF, 0 0 20px #FFF, 0 0 30px #423FE6, 0 0 40px #423FE6, 0 0 70px #423FE6, 0 0 80px #423FE6, 0 0 100px #423FE6

   
    .logotype1,
    .logotype1:hover,
    .logotype1 div
        
        position: relative
        display: inline-block
        font-size: 36px
        color: black
        text-shadow: 2px 4px 3px rgba(0,0,0,0.2)
        font-family: 'DM sans', sans-serif
        font-weight: 100
        text-decoration: none
        line-height: 16px
    .logotype1 div
        display: block
    .logotype1 b
        letter-spacing: 2px
        font-size: 44px
        color: #423FE6
        text-shadow: 2px 4px 3px rgba(0,0,0,0.3)
        font-weight: 600
        background: #EEEEEE
    .logotype1 span
        text-shadow: 1px 2px 1px rgba(0,0,0,0.2)
        display: block
        float: right
        font-size: 12px
        color: #423FE6
        line-height: 6px
    .logotype1:before
        position: absolute
        top: -12px
        left: 0
        content: ""
        width: 66px
        height: 66px
        transition: all 0.3s ease
        z-index: -1
        box-sizing: content-box
    .logotype1:hover:before
        transform: scale(1.1)
        border: 8px solid black
        @media (max-width:600px)
    .logotype1,
    .logotype1:hover,
    .logotype1 div
        font-size: 26px
        line-height: 6px
        margin: 20px 0 20px 20px
    .logotype1 b
        font-size: 34px
    .logotype1 span
        font-size: 14px
        line-height: 4px
    .logotype1:before
        top: -9px
        border: 6px solid black
        width: 52px
        height: 52px
    .logotype1:hover:before
        border: 7px solid #423FE6
    button
      background: #423FE6
      border-radius: 10px
      color: white
      font-size: 24px
      padding: 10px 30px 10px 30px
      font-family: "DM sans", sans-serif
      
 
    button a:visited
      color: white
      text-decoration: none
  
  .container
    background: white
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
    margin-top: 50px
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
    text-decoration: none
    
  


  input[type="text"],
  input[type="password"], 
    border: 1px solid #dadce0
    border-radius: 4px
    box-shadow: 0 0 0 transparent
    font-size: 28px
    line-height: 30px
    outline: transparent
    padding: 11px 16px
    transition: border .3s,box-shadow .3s
    width: 100%

  input[type="text"]:focus,
  input[type="password"]:focus
    border: 2px solid #00239c!important
    padding: 11px 16px
    transition: border .3s,box-shadow .3s
    width: 100%
  button
    background: #423FE5
    border-radius: 10px
    color: white
    font-size: 24px
    padding: 10px 37px
    font-family: "DM sans", sans-serif
    display: inline-block
 
  // button a:visited
  //   color: white
  //   text-decoration: none
  button a:hover
    text-shadow: 0 0 10px #FFF, 0 0 20px #FFF, 0 0 30px #423FE6, 0 0 40px #423FE6, 0 0 70px #423FE6, 0 0 80px #423FE6, 0 0 100px #423FE6
  @media (max-width: 768px)
    .menu-bar
      display: flex
      flex-direction: column
      align-items: center
      justify-content: space-around
      height: 100vh
    .menu-bar ul
      margin-top: 20px
      margin-bottom: 20px
    .menu-bar li
      margin: 10px 0
    .menu-bar li a
      font-size: 18px
    .container
      margin-top: 60px
    h1
      font-size: 24px
      margin-top: 0
      margin-bottom: 20px
      text-align: center
    .form-group
      margin-bottom: 20px
    .input-icon
      width: 24px
      height: 24px
      margin-right: 10px
    input[type="text"]
      width: 100%
      height: 50px
      padding: 10px
      font-size: 18px
      border: none
      border-radius: 5px
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2)
    button
      width: 100%
      height: 50px
      font-size: 18px
      font-weight: bold
      border: none
      border-radius: 5px
      background-color: #423FE5
      color: #fff
      cursor: pointer

    // button

  //   font-family: "Garamond", serif
  //   font-size: 36px
  //   font-weight: 500
  //   background: #1F2937
  //   color: white
  //   border: none
  //   position: relative
  //   overflow: hidden
  //   border-radius: 4px
  //   padding: 11px 100px
  //   button-height: 30px
  //   margin-top: 50px
  //   cursor: pointer
  //   font-weight: bold

  // .gradient
  //   position: absolute
  //   width: 100%
  //   height: 100%
  //   left: 0
  //   top: 0
  //   border-radius: 4px
  //   margin-top: -0.25em
  //   background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3))

  // .btn
  //   position: relative
  //   top: -1px
    

  // .transition
  //   transition-timing-function: cubic-bezier(0, 0, 0.2, 1)
  //   transition-duration: 500ms
  //   background-color: rgba(0, 0, 0, 1.0)
  //   border-radius: 9999px
  //   width: 0
  //   height: 0
  //   position: absolute
  //   left: 50%
  //   top: 50%
  //   transform: translate(-50%, -50%)

  // button:hover .transition
  //   width: 14em
  //   height: 14em

  // button:active
  //   transform: scale(0.97)
  </style>

