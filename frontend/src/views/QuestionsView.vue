<!-- <template>
  <body>
    <div class="progress-bar">
      <div class="progress"></div>
    </div>
    
    <div class="questions">
      <div class="question active" id="question1">
        <p>Question 1: <input type="text" id="answer1"></p>
        <button onclick="checkAnswer(1)">Submit</button>
      </div>
      <div class="question" id="question2">
        <p>Question 2: <input type="text" id="answer2"></p>
        <button @click="checkAnswer(2)">Submit</button>
      </div>
      <div class="question" id="question3">
        <p>Question 3: <input type="text" id="answer3"></p>
        <button @click="checkAnswer(3)">Submit</button>
      </div>
      <div class="question" id="question4">
        <p>Question 4: <input type="text" id="answer4"></p>
        <button @click="checkAnswer(4)">Submit</button>
      </div>
    </div>
  </body>

</template>
  
<script>
  var currentQuestion = 1;

  function checkAnswer(questionNum) {
    var progressBar = document.querySelector('.progress');
    
    var currentQuestionDiv = document.getElementById('question' + currentQuestion);
    currentQuestionDiv.style.display = 'none';
    
    currentQuestion++;
    if (currentQuestion <= 4) {
      var nextQuestionDiv = document.getElementById('question' + currentQuestion);
      nextQuestionDiv.style.display = 'block';
      progressBar.style.width = (Math.floor((currentQuestion - 1) * 25)) + '%';
    } else {
      progressBar.style.width = '100%';
    }
  }


  </script>
  
  <style lang="sass" scoped>
body 
  margin: 0
  padding: 0
  font-family: Arial, sans-serif


.progress-bar 
  width: 100%
  height: 10px
  background-color: #ddd


.progress 
  height: 100%
  background-color: #4CAF50
  width: 0%
  transition: width 1s ease-in-out

.questions 
  margin-top: 20px

.question 
  display: none

.question.active 
  display: block

  </style>
   -->
