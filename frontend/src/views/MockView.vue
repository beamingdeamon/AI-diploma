
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
        </ul>
        </div>

            <form>
            <div class="form-group"> 
                
                <iframe src="https://drive.google.com/file/d/14qlR3ZiORFRob8Ol7s23Rl_ISNor8P99/preview" width="640" height="480" allow="autoplay"></iframe>
               

                
                <table>
                    <tr>
                    <th>#</th>
                    <th>PART 1</th>
                    <th>#</th>
                    <th>PART 2</th>
                    
                    <th>#</th>
                    <th>PART 3</th>
                    <th>#</th>
                    <th>PART 4</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td><input type="text" name="answer1"></td>
                    <td>11</td>
                    <td><input type="text" name="answer11"></td>
                    <td>21</td>
                    <td><input type="text" name="answer21"></td>
                    <td>31</td>
                    <td><input type="text" name="answer31"></td>
                    </tr>
                    <tr>
                    <td>2</td>
                    <td><input type="text" name="answer2"></td>
                    <td>12</td>
                    <td><input type="text" name="answer12"></td>
                    <td>22</td>
                    <td><input type="text" name="answer22"></td>
                    <td>32</td>
                    <td><input type="text" name="answer32"></td>
                    </tr>
                    <tr>
                    <td>3</td>
                    <td><input type="text" name="answer3"></td>
                    <td>13</td>
                    <td><input type="text" name="answer13"></td>
                    <td>23</td>
                    <td><input type="text" name="answer23"></td>
                    <td>33</td>
                    <td><input type="text" name="answer33"></td>
                    </tr>
                    <tr>
                    <td>4</td>
                    <td><input type="text" name="answer4"></td>
                    <td>14</td>
                    <td><input type="text" name="answer14"></td>
                    <td>24</td>
                    <td><input type="text" name="answer24"></td>
                    <td>34</td>
                    <td><input type="text" name="answer34"></td>
                    </tr>
                    <tr>
                    <td>5</td>
                    <td><input type="text" name="answer5"></td>
                    <td>15</td>
                    <td><input type="text" name="answer15"></td>
                    <td>25</td>
                    <td><input type="text" name="answer25"></td>
                    <td>35</td>
                    <td><input type="text" name="answer35"></td>
                    </tr>
                    <tr>
                    <td>6</td>
                    <td><input type="text" name="answer6"></td>
                    <td>16</td>
                    <td><input type="text" name="answer16"></td>
                    <td>26</td>
                    <td><input type="text" name="answer26"></td>
                    <td>36</td>
                    <td><input type="text" name="answer36"></td>
                    </tr>
                    <tr>
                    <td>7</td>
                    <td><input type="text" name="answer7"></td>
                    <td>17</td>
                    <td><input type="text" name="answer17"></td>
                    <td>27</td>
                    <td><input type="text" name="answer27"></td>
                    <td>37</td>
                    <td><input type="text" name="answer37"></td>
                    </tr>
                    <tr>
                    <td>8</td>
                    <td><input type="text" name="answer8"></td>
                    <td>18</td>
                    <td><input type="text" name="answer18"></td>
                    <td>28</td>
                    <td><input type="text" name="answer28"></td>
                    <td>38</td>
                    <td><input type="text" name="answer38"></td>
                    </tr>
                    
                    <tr>
                    <td>9</td>
                    <td><input type="text" name="answer9"></td>
                    <td>19</td>
                    <td><input type="text" name="answer19"></td>
                    <td>29</td>
                    <td><input type="text" name="answer29"></td>
                    <td>39</td>
                    <td><input type="text" name="answer39"></td>
                    </tr>
                    <tr>
                    <td>10</td>
                    <td><input type="text" name="answer10"></td>
                    <td>20</td>
                    <td><input type="text" name="answer20"></td>
                    <td>30</td>
                    <td><input type="text" name="answer30"></td>
                    <td>40</td>
                    <td><input type="text" name="answer40"></td>
                    </tr>
                </table>
            </div>
            <div class="form-group">
                <br>

                <button @click="Submit()">
                <span class="transition"></span>
                <span class="gradient"></span>
                <span class="btn">Submit</span>
      
                </button>
            </div> 
            </form>
    </body>
</template>

 <script> /*
export default {
    mounted: function () {
       if(!window.localStorage.getItem("token")){
            window.location.replace("/");
        }
    }
} */
</script>

<style lang="sass" scoped>
 body
    background-size: cover
    background-repeat: no-repeat
    background-attachment: fixed
    background-color: #EEEEEE
    height: 100%
    overflow: auto
    margin-bottom: 20px
    height: 100vh
    display: flex
    
 
    .menu-bar
      background-color: #EEEEEE
      
      width: 100%
      height: 100px
      display: flex
      flex-direction: row
      align-items: center
      position: fixed
      z-index: 10
    
   
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
    .form-group
        margin-bottom: -100px
        align-self: center
        align-items: center
        text-align: center
        border-radius: 10px
        width: 1000px
        

        
    table 
        width: 50%
        font-family: "DM Sans", sans-serif
        align-self: center
        align-content: center
        align-items: center
        display: table
        margin: 0 auto
        font-weight: bold
        color: #0239c0
        padding-top: 20px
       
    th
        height: 30px
        width: 50%
        background-color: rgba(15, 76, 129, 1.00)
        text-align: center
        border: 1px solid black
        border-collapse: collapse
        align-content: center
        align-self: center
        color: white 
        font-weight: bold
        font-family: "Times new roman", sans-serif
        font-size: 18px
    td 
        height: 20px
        width: 50%
        text-align: center
        border: 1px solid black
        border-collapse: collapse
        align-content: center
        align-self: center
        color: rgba(15, 76, 129, 1.00)
        font-weight: bold
        font-family: "Times new roman", sans-serif
        font-size: 18px
    
    input[type="text"]
        border: none
        border-bottom: 5px solid #ddd
        background-color: transparent
        outline: none
        height: 20px
        font-family: Arial, sans-serif
        font-size: 20px
        text-transform: uppercase
        color: rgba(15, 76, 129, 1.00) 
        transition: all 0.3s
    
    input[type="text"]:focus
        border-bottom: 1px solid #0239c0
        color: #0239c0
        
    button

        font-family: "DM Sans", sans-serif
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
    
    iframe
        align-items: center
        width: 110%
        height: 500px
        border: 1px solid #ccc
        margin-top: 10px

</style> 
