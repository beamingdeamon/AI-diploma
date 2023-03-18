<template>
  <body>
      
    <div class="progress-bar">
      <div class="progress"></div>
    </div>

    <div class="questions">
      <div class="question" id="question1">
        <p>Question 1: <input type="text" id="answer1"></p>
        <button onclick="checkAnswer(1)">Submit</button>
      </div>
      <div class="question" id="question2" style="display:none">
        <p>Question 2: <input type="text" id="answer2"></p>
        <button onclick="checkAnswer(2)">Submit</button>
      </div>
      <div class="question" id="question3" style="display:none">
        <p>Question 3: <input type="text" id="answer3"></p>
        <button onclick="checkAnswer(3)">Submit</button>
      </div>
      <div class="question" id="question4" style="display:none">
        <p>Question 4: <input type="text" id="answer4"></p>
        <button onclick="checkAnswer(4)">Submit</button>
      </div>
    </div>

  </body>
</template>
  
  <script>
  var currentQuestion = 1;
  var numCorrectAnswers = 0;

  function checkAnswer(questionNum) {
    var answer = document.getElementById('answer' + questionNum);
    if (answer.value !== '') {
      numCorrectAnswers++;
    }
    
    var progressBar = document.querySelector('.progress');
    progressBar.style.width = (Math.floor((numCorrectAnswers / 4) * 100 / 25) * 25) + '%';
    
    var currentQuestionDiv = document.getElementById('question' + currentQuestion);
    currentQuestionDiv.style.display = 'none';
    
    currentQuestion++;
    if (currentQuestion <= 4) {
      var nextQuestionDiv = document.getElementById('question' + currentQuestion);
      nextQuestionDiv.style.display = 'block';
    }
  }

  </script>
  
  <style lang="sass" scoped>
    .progress-bar 
      width: 100%
      height: 10px
      background-color: #ddd


      .progress 
        height: 100%
        background-color: #4CAF50
        width: 0%
        transition: width 1s ease-in-out


  </style>
  
 
  