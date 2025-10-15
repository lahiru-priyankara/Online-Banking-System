<?php

require 'connection.php';

$fullname = $_POST["fullname"];
$initials = $_POST["initials"];
$dob_date = $_POST["date"];
$gender = $_POST["gender"];
$nationality = $_POST["nationality"];
$nic = $_POST["nic"];
$street = $_POST["street"];
$city = $_POST["city"];
$country = $_POST["country"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$employment = $_POST["employment"];
$employer_name = $_POST["employer_name"];
$employer_address = $_POST["employer_address"];
$income = $_POST["income"];
$funds = $_POST["funds"];
$account_type = $_POST["accounttype"];
$deposit = $_POST["deposit"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

// Insert data into the saving_process table
$sql = "INSERT INTO  savingaccount_data (saving_id, FullName, NameWinitials, DOB, Gender, Nationality, NIC_Passport, A_street, City, Country, PhoneNo, Email, EmployeeStatus, EmployerName, EmployerAddress, AnnualIncome, SourceOfFunds, SavingType, InitialDepositAmount, SPassword, ReEnterPassword) 
        VALUES ('', '$fullname', '$initials', '$dob_date', '$gender', '$nationality', '$nic', '$street', '$city', '$country', '$mobile', '$email', '$employment', '$employer_name', '$employer_address', '$income', '$funds', '$account_type', '$deposit', '$password', '$confirm_password')";

if($con->query($sql)) {
    // Insert data into accounts table
    $SQL_copy = "INSERT INTO accounts (user_id, saving_id, AccountType, Balance) VALUES (null, LAST_INSERT_ID(), 'Saving', '$deposit')";
    
    if($con->query($SQL_copy)) {
        header('Location: Login.php');

    } else {
        echo "Error inserting into user_data: " . $con->error;    
        header('Location: User-Saving.php');
    }
} else {
    echo "Error inserting into user_data: " . $con->error;
}

$con->close();
?>
