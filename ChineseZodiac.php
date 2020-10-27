
<html>
<head>
<title>Chinese Zodiac</title>
<meta http-equiv="content-type"content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="/index.css">
<style>
.error {color: #FF0000;}

#search {
    width: 15em; 
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


<!-- Start of quiz -->
<div class="neumorphic-test"> 
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
  <?php
    if (isset($_POST['q5']))
    {
        $fontFamilyVar = $_POST['q5'];
    }
    if (isset($_POST['q7']))
    {
        $fontFamilyVar = $_POST['q7'];
    }
    if (isset($_POST['q10']))
    {
        $fontFamilyVar = $_POST['q10'];
    }
  ?>

  <h2>What do you know about the Chinese zodiac signs?</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    Your Name: <input type="name" name="name" value="<?php echo $_POST['name']; 
    ?>" placeholder="eg. Richard Randell" required>
    <span class="error"><?php echo $nameErr ?></span>
    <br><br>
    
    Your Email: <input type="email" name="email" value="<?php echo $_POST['email']; 
    ?>" placeholder="eg. example@gmail.com" required>
    <span class="error"><?php echo $emailErr ?></span>
    <br>
    <i><small>Your name and email address are required.</small></i>
    <br><br><br><br>
    
    You must answer all 10 questions before the quiz will be graded.
    <br><br>
    
    1) The Chinese Zodiac associates a sign with each month.
    <br><br>
    <input type="radio" name="q1" value="True"
    <?php if (isset($_POST['q1']) and $_POST['q1'] == 'True') echo ' checked'; ?>>True
    <input type="radio" name="q1" value="False"
    <?php if (isset($_POST['q1']) and $_POST['q1'] == 'False') echo ' checked'; ?>>False
    <br><br>
    <?php echo $q1Err ?>
    <br><br>
    
    2) The Chinese Zodiac signs each have an equivalent constellation, like those of the occidental zodiac.
    <br><br>
    <input type="radio" name="q2" value="True"
    <?php if (isset($_POST['q2']) and $_POST['q2'] == 'True') echo ' checked'; ?>>True
    <input type="radio" name="q2" value="False"
    <?php if (isset($_POST['q2']) and $_POST['q2'] == 'False') echo ' checked'; ?>>False
    <br><br>
    <?php echo $q2Err ?>
    <br><br>
    
    3) Which is the only bird that is a sign in the Chinese Zodiac?
    <br><br>
      Enter your response here:<input type="text" name="q3" value=<?php echo $_POST['q3'];?>>
      <br><br>
      <?php echo $q3Err ?>
    <br><br>
    4) How many signs are in the Chinese Zodiac?
    <br><br>
      Enter your response here:<input type="text" name="q4" value="<?php echo $_POST['q4'];?>"> 
      <br><br>
      <?php echo $q4Err ?>
    <br><br>
    
    5) The Chinese zodiac traditionally begins with which sign?
    <?php
      if (isset($_POST['q5']))
      {
          $fontFamilyVar = $_POST['q5'];
      }
    ?>
    <br><br>
    <select name="q5">
    <option value="NULL">-- Select the correct answer --</option>
    <option <?php if($fontFamilyVar=="Baseball Bat") echo 'selected="selected"';?> value="Baseball Bat"> Baseball Bat </option>
    <option <?php if($fontFamilyVar=="Rat") echo 'selected="selected"';?> value="Rat"> Rat </option>
    <option <?php if($fontFamilyVar=="Ox") echo 'selected="selected"';?> value="Ox"> Ox </option>
    <option <?php if($fontFamilyVar=="Tiger") echo 'selected="selected"';?> value="Tiger"> Tiger </option>
    <option <?php if($fontFamilyVar=="Rabbit") echo 'selected="selected"';?> value="Rabbit"> Rabbit </option>
    <option <?php if($fontFamilyVar=="Dragon") echo 'selected="selected"';?> value="Dragon"> Dragon </option>
    <option <?php if($fontFamilyVar=="Snake") echo 'selected="selected"';?> value="Snake"> Snake </option>
    <option <?php if($fontFamilyVar=="Horse") echo 'selected="selected"';?> value="Horse"> Horse </option>
    <option <?php if($fontFamilyVar=="Goat") echo 'selected="selected"';?> value="Goat"> Goat </option>
    <option <?php if($fontFamilyVar=="Monkey") echo 'selected="selected"';?> value="Monkey"> Monkey </option>
    <option <?php if($fontFamilyVar=="Rooster") echo 'selected="selected"';?> value="Rooster"> Rooster </option>
    <option <?php if($fontFamilyVar=="Dog") echo 'selected="selected"';?> value="Dog"> Dog </option>
    <option <?php if($fontFamilyVar=="Pig") echo 'selected="selected"';?> value="Pig"> Pig </option>
    </select>
    <br><br>
    <?php echo $q5Err ?>
    <br><br>
    
    6) Chinese zodiac signs respresent different types of personalities.
    <br><br>
    <input type="radio" name="q6" value="True"
    <?php if (isset($_POST['q6']) and $_POST['q6'] == 'True') echo ' checked'; ?>>True
    <input type="radio" name="q6" value="False"
    <?php if (isset($_POST['q6']) and $_POST['q6'] == 'False') echo ' checked'; ?>>False
    <br><br>
    <?php echo $q6Err ?>
    <br><br>
    
    7) Which sign is not part of the Chinese Zodiac?
    <?php
      if (isset($_POST['q7']))
      {
          $fontFamilyVar = $_POST['q7'];
      }
    ?>
    <br><br>
    <select name="q7">
    <option value="NULL">-- Select the correct answer --</option>
    <option <?php if($fontFamilyVar=="Baseball Bat") echo 'selected="selected"';?> value="Baseball Bat"> Baseball Bat </option>
    <option <?php if($fontFamilyVar=="Rat") echo 'selected="selected"';?> value="Rat"> Rat </option>
    <option <?php if($fontFamilyVar=="Ox") echo 'selected="selected"';?> value="Ox"> Ox </option>
    <option <?php if($fontFamilyVar=="Tiger") echo 'selected="selected"';?> value="Tiger"> Tiger </option>
    <option <?php if($fontFamilyVar=="Rabbit") echo 'selected="selected"';?> value="Rabbit"> Rabbit </option>
    <option <?php if($fontFamilyVar=="Dragon") echo 'selected="selected"';?> value="Dragon"> Dragon </option>
    <option <?php if($fontFamilyVar=="Snake") echo 'selected="selected"';?> value="Snake"> Snake </option>
    <option <?php if($fontFamilyVar=="Horse") echo 'selected="selected"';?> value="Horse"> Horse </option>
    <option <?php if($fontFamilyVar=="Goat") echo 'selected="selected"';?> value="Goat"> Goat </option>
    <option <?php if($fontFamilyVar=="Monkey") echo 'selected="selected"';?> value="Monkey"> Monkey </option>
    <option <?php if($fontFamilyVar=="Rooster") echo 'selected="selected"';?> value="Rooster"> Rooster </option>
    <option <?php if($fontFamilyVar=="Dog") echo 'selected="selected"';?> value="Dog"> Dog </option>
    <option <?php if($fontFamilyVar=="Pig") echo 'selected="selected"';?> value="Pig"> Pig </option>
    </select>
    <br><br>
    <?php echo $q7Err ?>
    <br><br>
    
    8)Which is the only reptile that is a sign in the Chinese Zodiac?
    <br><br>
      Enter your response here:<input type="text" name="q8" value="<?php echo $_POST['q8'];?>">
      <br><br>
      <?php echo $q8Err ?>
    <br><br>
    
    9) Which is the only imaginary animal that is in the Chinese Zodiac?
    <br><br>
      Enter your response here:<input type="text" name="q9" value="<?php echo $_POST['q9'];?>">
      <br><br>
      <?php echo $q9Err ?>
    <br><br>
    
    10)The Chinese zodiac traditionally ends with what sign?
    <?php
      if (isset($_POST['q10']))
      {
          $fontFamilyVar = $_POST['q10'];
      }
    ?>
    <br><br>
    <select name="q10">
    <option value="NULL">-- Select the correct answer --</option>
    <option <?php if($fontFamilyVar=="Baseball Bat") echo 'selected="selected"';?> value="Baseball Bat"> Baseball Bat </option>
    <option <?php if($fontFamilyVar=="Rat") echo 'selected="selected"';?> value="Rat"> Rat </option>
    <option <?php if($fontFamilyVar=="Ox") echo 'selected="selected"';?> value="Ox"> Ox </option>
    <option <?php if($fontFamilyVar=="Tiger") echo 'selected="selected"';?> value="Tiger"> Tiger </option>
    <option <?php if($fontFamilyVar=="Rabbit") echo 'selected="selected"';?> value="Rabbit"> Rabbit </option>
    <option <?php if($fontFamilyVar=="Dragon") echo 'selected="selected"';?> value="Dragon"> Dragon </option>
    <option <?php if($fontFamilyVar=="Snake") echo 'selected="selected"';?> value="Snake"> Snake </option>
    <option <?php if($fontFamilyVar=="Horse") echo 'selected="selected"';?> value="Horse"> Horse </option>
    <option <?php if($fontFamilyVar=="Goat") echo 'selected="selected"';?> value="Goat"> Goat </option>
    <option <?php if($fontFamilyVar=="Monkey") echo 'selected="selected"';?> value="Monkey"> Monkey </option>
    <option <?php if($fontFamilyVar=="Rooster") echo 'selected="selected"';?> value="Rooster"> Rooster </option>
    <option <?php if($fontFamilyVar=="Dog") echo 'selected="selected"';?> value="Dog"> Dog </option>
    <option <?php if($fontFamilyVar=="Pig") echo 'selected="selected"';?> value="Pig"> Pig </option>
    </select>
    <br><br>
    <?php echo $q10Err ?>
    <br><br>
    
    <!-- Posting the quizes answers to an array -->
    <?php
    if (isset($_POST['submit'])) {
      $Answers = array("", $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10);
      echo "-------------------------------------------------------------------";
      echo "</br></br>You gave the following answers: ";
      for ($x = 1; $x < 11; $x++) {
        if($Answers[$x]== ""){
          echo "<br>Question $x: None ";
        }
        else{
          echo "<br>Question $x: $Answers[$x] ";
        }
          
      }
    }
    ?>

    <!-- outputs text based on user score -->
    <h4>
    <?php
   
    // For the program will create the text file for
    // the number of times a particular grade has been acheived 
    // I've only completed it the quiz for 0 right and 3 right
    // so thats the only text files that will be in the folder
    // as you complete for other grades the file will be created
    if($count == 0 && isset($_POST['submit'])){
      echo "You missed every question!";
        // total number of times the quiz is submitted
        $attempts = 0;
        $number_of_attempts_file = "number_times_grade_0.txt";
        // Load up the persisted value from the file and update $views
        if (file_exists($number_of_attempts_file))
        {
            $attempts = (int)file_get_contents($number_of_attempts_file);
        }
        $attempts++;
        file_put_contents($number_of_attempts_file, $attempts);
    } else if ($count == 1 || $count == 2) {
      echo "You really need to study the Chinese Zodiac";
        // total number of times the quiz is submitted
        $attempts = 0;
        $number_of_attempts_file = "number_times_grade_1OR2.txt";
        // Load up the persisted value from the file and update $views
        if (file_exists($number_of_attempts_file))
        {
            $attempts = (int)file_get_contents($number_of_attempts_file);
        }
        $attempts++;
        file_put_contents($number_of_attempts_file, $attempts);
    } else if ($count == 3 || $count == 4 || $count == 5) {
      echo "You know some things about the Chinese Zodiac";
        // total number of times the quiz is submitted
        $attempts = 0;
        $number_of_attempts_file = "number_times_grade_3OR4OR5.txt";
        // Load up the persisted value from the file and update $views
        if (file_exists($number_of_attempts_file))
        {
            $attempts = (int)file_get_contents($number_of_attempts_file);
        }
        $attempts++;
        file_put_contents($number_of_attempts_file, $attempts);
    } else if ($count == 6 || $count == 7) {
      echo "You've done some research on the Chinese Zodiac";
        // total number of times the quiz is submitted
        $attempts = 0;
        $number_of_attempts_file = "number_times_grade_6OR7.txt";
        // Load up the persisted value from the file and update $views
        if (file_exists($number_of_attempts_file))
        {
            $attempts = (int)file_get_contents($number_of_attempts_file);
        }
        $attempts++;
        file_put_contents($number_of_attempts_file, $attempts);
    } else if ($count == 8 || $count == 9) {
      echo "You really know your Chinese Zodiac signs";
        // total number of times the quiz is submitted
        $attempts = 0;
        $number_of_attempts_file = "number_times_grade_8OR9.txt";
        // Load up the persisted value from the file and update $views
        if (file_exists($number_of_attempts_file))
        {
            $attempts = (int)file_get_contents($number_of_attempts_file);
        }
        $attempts++;
        file_put_contents($number_of_attempts_file, $attempts);
    } else if ($count == 10) {
      echo "You are a Chinese Zodiac Expert";
        // total number of times the quiz is submitted
        $attempts = 0;
        $number_of_attempts_file = "number_times_grade_10.txt";
        // Load up the persisted value from the file and update $views
        if (file_exists($number_of_attempts_file))
        {
            $attempts = (int)file_get_contents($number_of_attempts_file);
        }
        $attempts++;
        file_put_contents($number_of_attempts_file, $attempts);
    }
    ?>
    </h4>

    <!-- outputs users score -->
    <?php 
      if (isset($_POST['submit'])) {
      echo "You Answered " .  
      $count . 
      " out of 10 questions correct for a score of " .  
      $count * 10 . 
      "%</br></br>";
    }
    echo "-------------------------------------------------------------------</br></br></br>";
    ?>
    
    
    <!-- submit and reset buttons -->
    <input id="search" type="reset" name="reset" value="Clear Quiz" onclick="this.form.reset();" />
    <input id="search" type="submit" name="submit" value="Grade Quiz" />
    
    <br>
    
    <!-- E-mailing name, e-mail, question #, response and correct answers -->
    <?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");

    // sending secure e-mail
    function sanitize_my_email($field) {
      $field = filter_var($field, FILTER_SANITIZE_EMAIL);
      if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
          return true;
      } else {
          return false;
      }
    }
    // sending the email
    if (isset($_POST['submit'])) {
      $to_email= $_POST["email"];
      $subject = 'Midterm Assessment';
      $message = 
      "</br>Hi ". $_POST["name"] .
      "! Your score on the test was " . ($count * 10) . "%" .
      "</br>The Results from the quiz are: </br>" .
      // the visitors answers
      '</br>The correct answers you gave are: </br>' .
      "Question 1:". $q1 ."\n</br>" .
      "Question 2:". $q2 ."\n</br>" .
      "Question 3:". $q3 ."\n</br>" .
      "Question 4:". $q4 ."\n</br>" .
      "Question 5:". $q5 ."\n</br>" .
      "Question 6:". $q6 ."\n</br>" .
      "Question 7:". $q7 ."\n</br>" .
      "Question 8:". $q8 ."\n</br>" .
      "Question 9:". $q9 ."\n</br>" .
      "Question 10:". $q10 ."\n</br>" .
      //the correct answers
      '</br>The correct answers are: </br>' .
      "Question 1: False \n</br>" .
      "Question 2: Flase \n</br>" .
      "Question 3: Rooster \n</br>" .
      "Question 4: 12 \n</br>" .
      "Question 5: Rat \n</br>" .
      "Question 6: True \n</br>" .
      "Question 7: Baseball Bat \n</br>" .
      "Question 8: Snake \n</br>" .
      "Question 9: Dragon \n</br>" .
      "Question 10: Pig \n</br>"
      ;

      // As I can not send a real email over the local server
      // I used this to see what my email would look like once sent
      // remove the comment slashes to view the email contents below the clear and submit buttons
      // echo $message;

      $headers = 'From: richardrandell2@outlook.com';
      //check if the email address is invalid $secure_check
      $secure_check = sanitize_my_email($to_email);
      if ($secure_check == false) {
        echo "Invalid input";
      } else { //send email 
        $success = mail($to_email, $subject, $message, $headers);
        
      }
    }
    ?>
    <!-- Comfirming if the message was sending or displaying an error -->
    <?php 
      if (isset($_POST['submit'])) {
      if(isset($success) && $success){ ?>
      <h1>Thank-You!</h1>
      Your Quiz results have been e-mailed to you!
      <?php } else { ?>
      <h1>Oops!</h1>
      Sorry, there was a problem sending your message.
      <?php } 
    }
  ?>
   <h4 style="text-decoration: underline;"></br></br></br>Midterm Assessment statistics</h4>
  <?php
  // get the contents, and echo it out.
  echo "Number of time the quiz has been completed: " . 
  file_get_contents( "number_of_attempts.txt" ) . "</br></br>"; 

  echo "Number of time each question has been answered correctly: </br>" . 
  "Question 1: " . file_get_contents( "question_one_total_times_answered_correctly.txt" ) . "</br>" . 
  "Question 2: " . file_get_contents( "question_two_total_times_answered_correctly.txt" ) . "</br>" . 
  "Question 3: " . file_get_contents( "question_three_total_times_answered_correctly.txt" ) . "</br>" . 
  "Question 4: " . file_get_contents( "question_four_total_times_answered_correctly.txt" ) . "</br>" . 
  "Question 5: " . file_get_contents( "question_five_total_times_answered_correctly.txt" ) . "</br>" . 
  "Question 6: " . file_get_contents( "question_six_total_times_answered_correctly.txt" ) . "</br>" . 
  "Question 7: " . file_get_contents( "question_seven_total_times_answered_correctly.txt" ) . "</br>" . 
  "Question 8: " . file_get_contents( "question_eight_total_times_answered_correctly.txt" ) . "</br>" . 
  "Question 9: " . file_get_contents( "question_nine_total_times_answered_correctly.txt" ) . "</br>" . 
  "Question 10: " . file_get_contents( "question_ten_total_times_answered_correctly.txt" ) . "</br>"; 
  
  echo "</br>Number of times a particular grade has been acheived: </br>";
  echo "0%: " . file_get_contents( "number_times_grade_0.txt" ) . "</br>"; 
  echo "10% or 20%: " . file_get_contents( "number_times_grade_1OR2.txt" ) . "</br>"; 
  echo "30%, 40% or 50%: " . file_get_contents( "number_times_grade_3OR4OR5.txt" ) . "</br>"; 
  echo "60% or 70%: " . file_get_contents( "number_times_grade_6OR7.txt" ) . "</br>"; 
  echo "80% or 90%: " . file_get_contents( "number_times_grade_8OR9.txt" ) . "</br>"; 
  echo "100%: " . file_get_contents( "number_times_grade_10.txt" ) . "</br>"; 

  ?>
  </br></br>
  </form>
</div>

<!-- tracks the number of times different things are done -->
<?php
// Number of correct answers on this attempt
$myfile = fopen("correct_answers_count.txt", "w") or die("Unable to open file!");
fwrite($myfile, "This is the total correct answers from the last quiz attempt: " . $count);
fclose($myfile);


include 'Comleted-Attempts-Count.php';
include 'QuestionTotals.php';
?>

</body>
<footer>
  <p style="color:grey;">Created By Richard Randell</p>
</footer>
</html>

