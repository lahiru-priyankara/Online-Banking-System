<?php
require 'connection.php';

$Fname = $_POST["full-name"];
$initials = $_POST["initials"];
$DOB = $_POST["dob"];
$gender = $_POST["gender"];
$nic = $_POST["nic"];
$PhoneNo = $_POST["phone"];
$email = $_POST["email"];
$A_street = $_POST["street"];
$city = $_POST["city"];
$country = $_POST["country"];
$E_payment = $_POST["payment"];
$Ps = $_POST["password"];
$RPs = $_POST["confirm-password"];

// Insert data into the user_data table
$SQL = "INSERT INTO user_data (user_id, FullName, NameWinitials, DOB, Gender, NIC_Passport, PhoneNo, Email, A_street, City, Country, EntryPayment, UPassword, ReEnterPassword) 
        VALUES ('','$Fname', '$initials', '$DOB', '$gender', '$nic', '$PhoneNo', '$email', '$A_street', '$city', '$country', '$E_payment', '$Ps', '$RPs')";

if($con->query($SQL)) {
    // Insert data into accounts table
    $SQL_copy = "INSERT INTO accounts (user_id, AccountType, Balance) VALUES (LAST_INSERT_ID(), 'Current', '$E_payment')";
    
    if($con->query($SQL_copy)) {
        echo "Submit Your Data <br> Please Login your account";
        header('Location: Login.php');

    } else {
        header('Location: Register.php');
    }
} else {
    echo "Error inserting into user_data: " . $con->error;
}


$con->close();
?>
