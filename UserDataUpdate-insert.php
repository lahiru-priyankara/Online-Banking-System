<?php
require 'connection.php';
$id = $_POST["ID"];
$Fname = $_POST["full-name"];
$initials = $_POST["initials"];
$DOB = $_POST["dob"];
$gender = $_POST["gender"];

$PhoneNo = $_POST["phone"];
$email = $_POST["email"];
$A_street = $_POST["street"];
$city = $_POST["city"];
$country = $_POST["country"];

$sql="UPDATE user_data set FullName='$Fname',NameWinitials='$initials',DOB='$DOB',Gender='$gender',PhoneNo='$PhoneNo',Email='$email',A_street='$A_street',City='$city',Country='$country'
where NIC_Passport='$id'";

$con->query($sql);
$con->close();
?>