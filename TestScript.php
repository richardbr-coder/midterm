<html>
<head>
<title>Chinese Zodiac</title>
<meta http-equiv="content-type"content="text/html; charset=iso-8859-1" />

<style>
body {
    background-color: rgba(236, 236, 236, 0.479);
    text-align: center;
    justify-content: center;
}

.header-img {
    background-color: rgba(4, 38, 228, 0.719);
    text-align: center;
    padding: 30px;
    margin: 20px;
    margin-bottom: 0px;
    color: rgb(255, 255, 255);
    box-shadow: 0px 0px 20px 5px #888888;
    border-radius: 15px;
}

.neumorphic-btn {
    font-size: 20px;
    border: none;
    padding: 10px 40px;
    border-radius: 40px;
    color: #6D7587;
    background-color: rgba(236, 236, 236, 0.479);
    /*box-shadow: 3px 4px 6px 1px rgba(0, 0, 0, 0.3), 
                -2px -2px 4px 2px rgba(255, 255, 255, 1), 
                inset -14px -14px 20px -10px rgba(0, 0, 0, 0.1),
                inset 14px 14px 20px -10px rgba(255, 255, 255, 0.5) !important;  */
    box-shadow: 7px 7px 15px rgba(55, 84, 170, .15),
        -7px -7px 20px rgba(255, 255, 255, 1),
        inset 0px 0px 4px rgba(255, 255, 255, .2),
        inset 7px 7px 15px rgba(55, 84, 170, 0),
        inset -7px -7px 20px rgba(255, 255, 255, 0),
        0px 0px 4px rgba(255, 255, 255, 0) !important;
    transition: box-shadow .25s ease !important;
}
.neumorphic-index-info{
    font-size: 20px;
    border: none;
    padding: 50px 40px;
    margin: 100px;
    margin-top: 0px;
    border-radius: 40px;
    color: #6D7587;
    background-color: rgba(236, 236, 236, 0.479);
    box-shadow: 7px 7px 15px rgba(55, 84, 170, .15),
        -7px -7px 20px rgba(255, 255, 255, 1),
        inset 0px 0px 4px rgba(255, 255, 255, .2),
        inset 7px 7px 15px rgba(55, 84, 170, 0),
        inset -7px -7px 20px rgba(255, 255, 255, 0),
        0px 0px 4px rgba(255, 255, 255, 0) !important;
    transition: box-shadow .25s ease !important;
}
</style>
</head>
<body>
  <!-- heading div -->
<div class="header-img">
    <h1>Midterm Assessment: The Chinese Zodiac</h1>
</div>
</br></br></br>
<!-- Home button -->
<div style="margin-bottom:50px;">
  <a style="margin-bottom: 50px;" class="neumorphic-btn" href="/index.php">Home</a>
</div>

<p style="padding: 30px;" class="neumorphic-index-info">
This is the program with nothing extra, just the working program. All styling and extra function have been removed for testing purposes
</p>

<div style="text-align: left;
            justify-content: none;">
      <?php

        //define variables used to store user input
        $nameErr = $emailErr = $q1Err = $q2Err = $q3Err = $q4Err = $q5Err = $q6Err = $q7Err = $q8Err = $q9Err = $q10Err = "";
        $name = $email = $q1 = $q2 = $q3 = $q4 = $q5 = $q6 = $q7 = $q8 = $q9 = $q10 = "";

        //count interator for score
        $count = 0;

        //filters and strips input of unnecessary characters
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
          
          //if statements to test if input exists, if not, promt user with error variable
          //if there is input, the variable is stripped of unnecessary characters and stored for output until the quiz is submitted
          if(empty($_POST["name"])){
            $nameErr = "You did not enter your name.";
          } else {
            $name = test_input($_POST["name"]);
          }
          
          if(empty($_POST["email"])){
            $emailErr = "You did not enter your email address.";
          } else {
            $email = test_input($_POST["email"]);
          }
          
          if (empty($_POST["q1"])) {
            $q1Err = "<font color='red'> You did not answer Question 1</font>";
          } else {
            $q1 = test_input($_POST["q1"]);
            if($q1 == "False"){
            $q1Err = "<font color='green'>&#10004;</font> Your answer, " . $q1 . " is correct!";
            ++$count;
            }else {
              $q1Err = "<font color='red'>&#10008;</font> Your answer, " . $q1 . " is incorrect! The correct answer is False.";
            }
            
          }
          
          if (empty($_POST["q2"])) {
            $q2Err = "<font color='red'> You did not answer Question 2</font>";
          } else {
            $q2 = test_input($_POST["q2"]);
            if($q2 == "False"){
            $q2Err = "<font color='green'>&#10004;</font> Your answer, " . $q2 . " is correct!";
            ++$count;
            }else {
              $q2Err = "<font color='red'>&#10008;</font> Your answer, " . $q2 . " is incorrect! The correct answer is False.";
            }
            
          }
          
          if (empty($_POST["q3"])) {
            $q3Err = "<font color='red'> You did not answer Question 3</font>";
          } else {
            $q3 = test_input($_POST["q3"]);
            if($q3 == 'Rooster' || $q3 == 'rooster'){
            $q3Err = "<font color='green'>&#10004;</font> Your answer, " . $q3 ." is correct!";
            ++$count;
            }else {
              $q3Err = "<font color='red'>&#10008;</font> Your answer, " . $q3 . " is incorrect! The correct answer is Rooster.";
            }
            
          }
          
          if (empty($_POST["q4"])) {
            $q4Err = "<font color='red'> You did not answer Question 4</font>";
          } else {
            $q4 = test_input($_POST["q4"]);
            if($q4 == '12'){
            $q4Err = "<font color='green'>&#10004;</font> Your answer, " . $q4 ." is correct!";
            ++$count;
            }else {
              $q4Err = "<font color='red'>&#10008;</font> Your answer, " . $q4 . " is incorrect! The correct answer is 12.";
            }
            
          }
          
          if ($_POST["q5"] == 'NULL') {
            $q5Err = "<font color='red'> You did not answer Question 5</font>";
          } else {
            $q5 = test_input($_POST["q5"]);
            if($q5 == 'Rat'){
            $q5Err = "<font color='green'>&#10004;</font> Your answer, " . $q5 ." is correct!";
            ++$count;
            }else {
              $q5Err = "<font color='red'>&#10008;</font> Your answer, " . $q5 . " is incorrect! The correct answer is Rat.";
            }
            
          }
          
          if (empty($_POST["q6"])) {
            $q6Err = "<font color='red'> You did not answer Question 6</font>";
          } else {
            $q6 = test_input($_POST["q6"]);
            if($q6 == "True"){
            $q6Err = "<font color='green'>&#10004;</font> Your answer, " . $q6 . " is correct!";
            ++$count;
            }else {
              $q6Err = "<font color='red'>&#10008;</font> Your answer, " . $q6 . " is incorrect! The correct answer is True.";
            }
            
          }
          
          if ($_POST["q7"] == 'NULL') {
            $q7Err = "<font color='red'> You did not answer Question 7</font>";
          } else {
            $q7 = test_input($_POST["q7"]);
            if($q7 == 'Baseball Bat'){
            $q7Err = "<font color='green'>&#10004;</font> Your answer, " . $q7 ." is correct!";
            ++$count;
            }else {
              $q7Err = "<font color='red'>&#10008;</font> Your answer, " . $q7 . " is incorrect! The correct answer is Baseball.";
            }
            
          }
          
          if (empty($_POST["q8"])) {
            $q8Err = "<font color='red'> You did not answer Question 8</font>";
          } else {
            $q8 = test_input($_POST["q8"]);
            if($q8 == "Snake" || $q8 == "snake"){
            $q8Err = "<font color='green'>&#10004;</font> Your answer, " . $q8 ." is correct!";
            ++$count;
            }else {
              $q8Err = "<font color='red'>&#10008;</font> Your answer, " . $q8 . " is incorrect! The correct answer is Snake.";
            }
            
          }
          
          if (empty($_POST["q9"])) {
            $q9Err = "<font color='red'> You did not answer Question 9</font>";
          } else {
            $q9 = test_input($_POST["q9"]);
            if($q9 == "Dragon" || $q9 == "dragon"){
            $q9Err = "<font color='green'>&#10004;</font> Your answer, " . $q9 ." is correct!";
            ++$count;
            }else {
              $q9Err = "<font color='red'>&#10008;</font> Your answer, " . $q9 . " is incorrect! The correct answer is Dragon.";
            }
            
          }
          
          if ($_POST["q10"] == 'NULL') {
            $q10Err = "<font color='red'> You did not answer Question 10</font>";
          } else {
            $q10 = test_input($_POST["q10"]);
            if($q10 == 'Pig'){
            $q10Err = "<font color='green'>&#10004;</font> Your answer, " . $q10 ." is correct!";
            ++$count;
            }else {
              $q10Err = "<font color='red'>&#10008;</font> Your answer," . $q10 . " is incorrect! The correct answer is Pig.";
            }
            
          }
          
        }


        ?>

        <!-- Basic site layout with PHP scripts to prompt user feedback based on their input -->

        <h2>What do you know about the Chinese zodiac signs?</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
          Your Name: <input type="name" name="name" required>
          <span class="error"><?php echo $nameErr ?></span>
          <br><br>
          
          Your Email: <input type="email" name="email" placeholder="eg. example@gmail.com" required>
          <span class="error"><?php echo $emailErr ?></span>
          <br>
          <i><small>Your name and email address are required.</small></i>
          <br><br><br><br>
          
          You must answer all 10 questions before the quiz will be graded.
          <br><br>
          
          1) The Chinese Zodiac associates a sign with each month.
          <br><br>
          <input type="radio" name="q1" value="True">True
          <input type="radio" name="q1" value="False">False
          <br><br>
          <?php echo $q1Err ?>
          <br><br>
          
          2) The Chinese Zodiac signs each have an equivalent constellation, like those of the occidental zodiac.
          <br><br>
          <input type="radio" name="q2" value="True">True
          <input type="radio" name="q2" value="False">False
          <br><br>
          <?php echo $q2Err ?>
          <br><br>
          
          3) Which is the only bird that is a sign in the Chinese Zodiac?
          <br><br>
            Enter your response here:<input type="text" name="q3">
            <br><br>
            <?php echo $q3Err ?>
          <br><br>
          4) How many signs are in the Chinese Zodiac?
          <br><br>
            Enter your response here:<input type="text" name="q4">
            <br><br>
            <?php echo $q4Err ?>
          <br><br>
          
          5) The Chinese zodiac traditionally begins with which sign?
          <br><br>
          <select name="q5">
          <option value="NULL">-- Select the correct answer --</option>
          <option value="Rat"> Rat </option>
          <option value="Ox"> Ox </option>
          <option value="Tiger"> Tiger </option>
          <option value="Rabbit"> Rabbit </option>
          <option value="Dragon"> Dragon </option>
          <option value="Snake"> Snake </option>
          <option value="Horse"> Horse </option>
          <option value="Goat"> Goat </option>
          <option value="Monkey"> Monkey </option>
          <option value="Rooster"> Rooster </option>
          <option value="Dog"> Dog </option>
          <option value="Pig"> Pig </option>
          </select>
          <br><br>
          <?php echo $q5Err ?>
          <br><br>
          
          6) Chinese zodiac signs respresent different types of personalities.
          <br><br>
          <input type="radio" name="q6" value="True">True
          <input type="radio" name="q6" value="False">False
          <br><br>
          <?php echo $q6Err ?>
          <br><br>
          
          7) Which sign is not part of the Chinese Zodiac?
          <br><br>
          <select name="q7">
          <option value="NULL">-- Select the correct answer --</option>
          <option value="Baseball Bat"> Baseball Bat </option>
          <option value="Rat"> Rat </option>
          <option value="Ox"> Ox </option>
          <option value="Tiger"> Tiger </option>
          <option value="Rabbit"> Rabbit </option>
          <option value="Dragon"> Dragon </option>
          <option value="Snake"> Snake </option>
          <option value="Horse"> Horse </option>
          <option value="Goat"> Goat </option>
          <option value="Monkey"> Monkey </option>
          <option value="Rooster"> Rooster </option>
          <option value="Dog"> Dog </option>
          <option value="Pig"> Pig </option>
          </select>
          <br><br>
          <?php echo $q7Err ?>
          <br><br>
          
          8)Which is the only reptile that is a sign in the Chinese Zodiac?
          <br><br>
            Enter your response here:<input type="text" name="q8">
            <br><br>
            <?php echo $q8Err ?>
          <br><br>
          
          9) Which is the only imaginary animal that is in the Chinese Zodiac?
          <br><br>
            Enter your response here:<input type="text" name="q9">
            <br><br>
            <?php echo $q9Err ?>
          <br><br>
          
          10)The Chinese zodiac traditionally ends with what sign?
          <br><br>
          <select name="q10">
          <option value="NULL">-- Select the correct answer --</option>
          <option value="Baseball Bat"> Baseball Bat </option>
          <option value="Rat"> Rat </option>
          <option value="Ox"> Ox </option>
          <option value="Tiger"> Tiger </option>
          <option value="Rabbit"> Rabbit </option>
          <option value="Dragon"> Dragon </option>
          <option value="Snake"> Snake </option>
          <option value="Horse"> Horse </option>
          <option value="Goat"> Goat </option>
          <option value="Monkey"> Monkey </option>
          <option value="Rooster"> Rooster </option>
          <option value="Dog"> Dog </option>
          <option value="Pig"> Pig </option>
          </select>
          <br><br>
          <?php echo $q10Err ?>
          <br><br>
          
          <?php
            //Posting the quizes answers to an array
            $Answers = array("", $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10);
            echo "You gave the following answers: ";
            for ($x = 1; $x < 11; $x++) {
              if($Answers[$x]== ""){
                echo "<br>Question $x: None ";
              }
              else{
                echo "<br>Question $x: $Answers[$x] ";
              }
                
            }
          ?>

          <!-- outputs text based on user score -->
          <h4>
          <?php
          if($count == 0){
            echo "You missed every question!";
          } else if ($count == 1 || $count == 2) {
            echo "You really need to study the Chinese Zodiac";
          } else if ($count == 3 || $count == 4 || $count == 5) {
            echo "You know some things about the Chinese Zodiac";
          } else if ($count == 6 || $count == 7) {
            echo "You've done some research on the Chinese Zodiac";
          } else if ($count == 8 || $count == 9) {
            echo "You really know your Chinese Zodiac signs";
          } else if ($count == 10) {
            echo "You are a Chinese Zodiac Expert";
          }
          ?>
          </h4>

          <!-- outputs users score -->
          <h3>You answered <?php echo $count ?> our of 10 questions correctly, for a score of <?php echo $count * 10 ?>%</h3>
          
          
          <!-- submit and reset buttons -->
          <input type="reset" name="reset" value="Clear Quiz" onclick="this.form.reset();" />
          <input type="submit" name="submit" value="Grade Quiz" />
          
          <br><br><br><br><br><br><br>
          
        </form>
      </div>
  </div>
</body>
<footer>
  <p style="color:grey;">Created By Richard Randell</p>
</footer>
</html>
