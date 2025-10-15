<?php
require 'connection.php';

    $full_name = $_POST['Fname'];
    $email = $_POST['email'];
    $feedback = $_POST['area'];
    
    $sql = "INSERT INTO feedback (feedback_id, FullName, email, feedback) 
    VALUES ('','$full_name', '$email','$feedback')";

if ($con->query($sql) === TRUE) {
echo "Feedback submitted successfully!";
} else {
echo "Error: " . $sql . "<br>" . $con->error;
}


$con->close();


   
?>
