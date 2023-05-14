<template>
  <div class="home flex flex-row w-full items-center justify-center">
    <div class="left w-4/12">
      <h1 class="mt-24 text-5xl font-bold">Your IELTS success is <span class="text-indigo-500">our priority</span></h1>
      <h2 class="mt-7 text-2xl font-semibold">Welcome to our innovative and free IELTS Reading study platform! Say goodbye to generic study plans that don't work for you. Our platform generates a personalized study plan just for you based on your mock test mistakes and deadline. No two plans are the same! Our individualized approach guarantees that you'll stay disciplined and focused on achieving a score of 7+ on your Reading IELTS exam. Our platform is easy to use and will guide you step-by-step through your daily exercises. Join us today and start your journey towards IELTS Reading success!</h2>
      <h3 class="text-xl text-red-500 font-bold mt-10">For now you can access only Reading exercises. But our project is in the process of generating more opportunities for you. </h3>
    </div>
    <div class="right w-4/12">
      <div class="flex flex-row justify-around">
        <img src="../assets/main_1.png" class="w-5/12" alt="">
        <img src="../assets/main_2.png" class="w-5/12" alt="">
      </div>
      <div class="flex flex-col items-center mt-10">
        <h1 class="font-bold text-4xl text-indigo-500 tracking-wide">Let's start!</h1>
        <button v-if="isLogin && !isMocked" class="shadow mt-10 text-2xl bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button" @click="goTest">
          Start Test
        </button>
        <button v-if="isLogin && isMocked" class="shadow mt-10 text-2xl bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button" @click="goTest">
          Go to Calendar
        </button>
        <form class="w-full max-w-sm mt-10" v-if="!isLogin">
          <div class="md:flex md:items-center content-center mb-6 ml-20">
            <div class="md:w-2/3">
              <input v-model="mail" required class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder="E-mail">
            </div>
          </div>
          <div class="md:flex md:items-center mb-6 ml-20">
            <div class="md:w-2/3">
              <input minlength="6" required v-model="password" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" placeholder="Password">
            </div>
          </div>
          <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
              <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button" @click="login">
                Log In
              </button>
            </div>
          </div>
        </form>
        <h2 class="text-xl font-bold" v-if="!isLogin">Don’t have an account? <a href="">Sign in</a>! </h2>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
export default {
  name: 'HomeView',
  data() {
    return {
      mail: "",
      password: "",
      isLogin: false,
      isMocked: false
    }
  },
  methods: {
    login(){
      let user_id
        axios.post('http://localhost:1337/api/auth/local', {
            identifier: this.mail,
            password: this.password,
          },{
              headers: {
                  Authorization: "Bearer 1538322b334657a8a270866536fe7f3f94d7dc68dc4e0609dc2eccefccfceddbcec3e0438d6abd159f230bfb7795bca378849691f05f0c970c1d3940e1c412ee533267db63b065c327956ba674794efca73eaef1c1a9e6762e49bf050cd4d68ddfbec98adb8cd808b1c731e36a65474010ebf894cdee5b9c1d9a9e883db341a9"
              }
          }) .then(function (response){
              user_id = response.data.user.id;
              window.localStorage.setItem("token", response.data.jwt)
              window.localStorage.setItem("user_id", response.data.user.id)
              axios.get('http://localhost:1337/api/user-questions-statistics',{
                    headers: {
                        Authorization: "Bearer 1538322b334657a8a270866536fe7f3f94d7dc68dc4e0609dc2eccefccfceddbcec3e0438d6abd159f230bfb7795bca378849691f05f0c970c1d3940e1c412ee533267db63b065c327956ba674794efca73eaef1c1a9e6762e49bf050cd4d68ddfbec98adb8cd808b1c731e36a65474010ebf894cdee5b9c1d9a9e883db341a9"
                    }
                }) .then(function (response){
                  let isMocked = false
                  for (const item of response.data.data) {
                    if(item.attributes.user_id === user_id){
                      isMocked = true;
                    }
                  }
                  if(isMocked){
                    localStorage.setItem("isMocked", true)
                    window.location.replace("/calendar")
                  }
                  else{
                      localStorage.setItem("isMocked", false)
                    window.location.replace("/pre-mock")
                  }
                })
          }).catch(function () {
            alert("Неверный логин или пароль")
        })
    },
    checkMock(user_id){
      axios.get('http://localhost:1337/api/user-questions-statistics',{
              headers: {
                  Authorization: "Bearer 1538322b334657a8a270866536fe7f3f94d7dc68dc4e0609dc2eccefccfceddbcec3e0438d6abd159f230bfb7795bca378849691f05f0c970c1d3940e1c412ee533267db63b065c327956ba674794efca73eaef1c1a9e6762e49bf050cd4d68ddfbec98adb8cd808b1c731e36a65474010ebf894cdee5b9c1d9a9e883db341a9"
              }
          }) .then(function (response){
            for (const item of response.data.data) {
              console.log(user_id)
              if(item.attributes.user_id == user_id){
                this.isMocked = true;
                console.log("allah")
              }
            }

          }).catch(function () {
        })
        console.log(this.isMocked)
    },
    goTest(){
      if(this.isMocked){
        this.$router.push('/calendar');
      }else{
        this.$router.push('/pre-mock');
      window.localStorage.removeItem("slide")
      }
      
    }
  },
  mounted() {
    if(window.localStorage.getItem('token')){
      this.isLogin = true
    }
    if(window.localStorage.getItem('isMocked') === "false"){
      this.isMocked = false
    } else if(window.localStorage.getItem('isMocked') === "true"){
      this.isMocked = true
    } 
      console.log(this.isMocked)
  },
}
</script>
