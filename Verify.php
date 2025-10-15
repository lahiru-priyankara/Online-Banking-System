<?php

require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $user_answer = $_POST['captcha_answer'];
    $correct_answer = $_POST['correct_answer'];

    // Check if the user's answer is correct
    if ($user_answer == $correct_answer) {
        echo "Verification successful! Thank you, " . htmlspecialchars($email) . ".";
    } else {
        echo "Verification failed! Please try again.";
    }
}
?>
