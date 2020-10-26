<?php
// total number of times the quiz is submitted
$attempts = 0;
$number_of_attempts_file = "number_of_attempts.txt";

// Load up the persisted value from the file and update $views
if (file_exists($number_of_attempts_file))
{
    $attempts = (int)file_get_contents($number_of_attempts_file);
}

// Increment the views counter since a new visitor has loaded the page
if (isset($_POST['submit'])) {
  $attempts++;
}

// Save the contents of this variable back into the file for next time
file_put_contents($number_of_attempts_file, $attempts);
?>