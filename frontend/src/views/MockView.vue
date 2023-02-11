<template>
    <body>
        <div class="menu-bar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

            <form>
            <div class="form-group">    
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
        
        height: 100vh
        display: flex
        align-items: center
        justify-content: center
    .menu-bar
        background-color: rgba(15, 76, 129, 1.00)
        width: 100%
        height: 50px
        display: flex
        align-items: center
        position: fixed
        top: 0
        left: 0
        right: 0
        z-index: 1

    .menu-bar ul
        list-style: none
        margin: 0
        padding: 0
        display: flex

    .menu-bar li
        display: inline-block
        padding: 0 10px

    .menu-bar a
        color: white
        text-decoration: none
        font-size: 20px

    .container
        display: flex
        align-items: center
        justify-content: center
        background-color: white
        border-radius: 10px
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22)
        padding: 40px
        width: 100%
        max-width: 800px
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
        border-radius: 10px

        
    table 
        width: 50%
        font-family: "Open Sans", sans-serif
        align-self: center
        align-content: center
        align-items: center
        display: table
        margin: 0 auto
        font-weight: bold
        color: #0239c0
        
    th
        height: 30px
        width: 50%
        background-color: #5768bdae
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
        color: #0239c0
        font-weight: bold
        font-family: "Times new roman", sans-serif
        font-size: 18px
    
    input[type="text"]
        border: none
        border-bottom: 10px solid #ddd
        background-color: transparent
        outline: none
        height: 15px
        
        font-size: 20px
        text-transform: uppercase
        color: #1F2937 
        transition: all 0.3s
    
    input[type="text"]:focus
        border-bottom: 10px solid #0239c0
        color: #0239c0
        
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