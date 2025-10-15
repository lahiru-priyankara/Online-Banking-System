<?php
require 'connection.php';

// Start the session
session_start(); 


//$LAccountType = $_POST["accounttype"];
$LUser_nic = $_POST["user-nic"];
$LUser_Ps = $_POST["user-password"];
$currentSQL = "SELECT user_id FROM user_data WHERE UPassword = '$LUser_Ps' AND NIC_Passport = '$LUser_nic'";
$user_result = $con->query($currentSQL);


$savingSQL = "SELECT saving_id FROM savingaccount_data WHERE SPassword = '$LUser_Ps' AND NIC_Passport = '$LUser_nic'";
$saving_result = $con->query($savingSQL);

if ($user_result->num_rows > 0) {
    
    $row = $user_result->fetch_assoc();
    $user_id = $row['user_id'];

    
    $_SESSION['user_id'] = $user_id;

    $SQL = "INSERT INTO regularuser_login (CLoginID, user_id, AccountType, NIC_Passport, LPassword, LastLogin) 
            VALUES ('', '$user_id', 'Current', '$LUser_nic', '$LUser_Ps', NOW())";

    if ($con->query($SQL)) {
        header("Location: http://localhost/Online%20Banking%20System/Current-Account.php?user_id=" . urlencode($user_id));
        exit(); 
    } else {
        echo "Error inserting user login data: " . $con->error;
    }

} elseif ($saving_result->num_rows > 0) {
    $row = $saving_result->fetch_assoc();
    $saving_id = $row['saving_id'];

    $_SESSION['saving_id'] = $saving_id;

                   $SQL = "INSERT INTO savinguser_login (SLoginID, saving_id, AccountType, NIC_Passport, LPassword, LastLogin) 
                 VALUES ('', '$saving_id', 'Saving', '$LUser_nic', '$LUser_Ps', NOW())";

    if ($con->query($SQL)) {
    
        header("Location: http://localhost/Online%20Banking%20System/Saving-Account.php?saving_id=" . urlencode($saving_id));
        exit();
    } else {
        echo "Error inserting saving login data: " . $con->error;
    }

} else {
    echo "Login failed: Incorrect credentials.";
}

$con->close();
?>
