<?php
// Question 1 total times answered right
$q1_attempts = 0;
$number_of_attempts_file = "question_one_total_times_answered_correctly.txt";
if (file_exists($number_of_attempts_file))
{
  $q1_attempts = (int)file_get_contents($number_of_attempts_file);
}
if ($q1 == "False") {
  $q1_attempts++;
}
file_put_contents($number_of_attempts_file, $q1_attempts);

// Question 2 total times answered right
$q2_attempts = 0;
$number_of_attempts_file = "question_two_total_times_answered_correctly.txt";
if (file_exists($number_of_attempts_file))
{
  $q2_attempts = (int)file_get_contents($number_of_attempts_file);
}
if ($q2 == "False") {
  $q2_attempts++;
}
file_put_contents($number_of_attempts_file, $q2_attempts);

// Question 3 total times answered right
$q3_attempts = 0;
$number_of_attempts_file = "question_three_total_times_answered_correctly.txt";
if (file_exists($number_of_attempts_file))
{
  $q3_attempts = (int)file_get_contents($number_of_attempts_file);
}
if ($q3 == 'Rooster' || $q3 == 'rooster') {
  $q3_attempts++;
}
file_put_contents($number_of_attempts_file, $q3_attempts);

// Question 4 total times answered right
$q4_attempts = 0;
$number_of_attempts_file = "question_four_total_times_answered_correctly.txt";
if (file_exists($number_of_attempts_file))
{
  $q4_attempts = (int)file_get_contents($number_of_attempts_file);
}
if ($q4 == '12') {
  $q4_attempts++;
}
file_put_contents($number_of_attempts_file, $q4_attempts);

// Question 5 total times answered right
$q5_attempts = 0;
$number_of_attempts_file = "question_five_total_times_answered_correctly.txt";
if (file_exists($number_of_attempts_file))
{
  $q5_attempts = (int)file_get_contents($number_of_attempts_file);
}
if ($q5 == 'Rat') {
  $q5_attempts++;
}
file_put_contents($number_of_attempts_file, $q5_attempts);

// Question 6 total times answered right
$q6_attempts = 0;
$number_of_attempts_file = "question_six_total_times_answered_correctly.txt";
if (file_exists($number_of_attempts_file))
{
  $q6_attempts = (int)file_get_contents($number_of_attempts_file);
}
if ($q6 == "True") {
  $q6_attempts++;
}
file_put_contents($number_of_attempts_file, $q6_attempts);

// Question 7 total times answered right
$q7_attempts = 0;
$number_of_attempts_file = "question_seven_total_times_answered_correctly.txt";
if (file_exists($number_of_attempts_file))
{
  $q7_attempts = (int)file_get_contents($number_of_attempts_file);
}
if ($q7 == 'Baseball Bat') {
  $q7_attempts++;
}
file_put_contents($number_of_attempts_file, $q7_attempts);

// Question 8 total times answered right
$q8_attempts = 0;
$number_of_attempts_file = "question_eight_total_times_answered_correctly.txt";
if (file_exists($number_of_attempts_file))
{
  $q8_attempts = (int)file_get_contents($number_of_attempts_file);
}
if ($q8 == "Snake" || $q8 == "snake") {
  $q8_attempts++;
}
file_put_contents($number_of_attempts_file, $q8_attempts);

// Question 9 total times answered right
$q9_attempts = 0;
$number_of_attempts_file = "question_nine_total_times_answered_correctly.txt";
if (file_exists($number_of_attempts_file))
{
  $q9_attempts = (int)file_get_contents($number_of_attempts_file);
}
if ($q9 == "Dragon" || $q9 == "dragon") {
  $q9_attempts++;
}
file_put_contents($number_of_attempts_file, $q9_attempts);

// Question 10 total times answered right
$q10_attempts = 0;
$number_of_attempts_file = "question_ten_total_times_answered_correctly.txt";
if (file_exists($number_of_attempts_file))
{
  $q10_attempts = (int)file_get_contents($number_of_attempts_file);
}
if ($q10 == 'Pig') {
  $q10_attempts++;
}
file_put_contents($number_of_attempts_file, $q10_attempts);
?>