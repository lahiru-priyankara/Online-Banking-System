<?php
require 'connection.php';

$AdminType = $_POST["admin-type"];  
$Admin_nic = $_POST["admin-nic"];    
$AdminPs = $_POST["admin-password"]; 


$empSQL = "SELECT Employee_ID FROM employee_data WHERE EPassword = '$AdminPs' AND NIC_Passport = '$Admin_nic' AND EmployeeType = '$AdminType'";
$result = $con->query($empSQL);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $Employee_ID = $row['Employee_ID'];

    $checkSQL = "SELECT * FROM admin_login WHERE NIC_Passport = '$Admin_nic'";
    $checkResult = $con->query($checkSQL);

    if ($checkResult->num_rows > 0) { 
        echo "Error: NIC/Passport already exists for another admin.";
    } else {
     $SQL = "INSERT INTO admin_login (ALoginID, Employee_ID, AdminType, NIC_Passport, APassword, LastLogin) 
                VALUES (NULL, '$Employee_ID', '$AdminType', '$Admin_nic', '$AdminPs', '')"; // Use NULL instead of empty string for AUTO_INCREMENT

    if ($con->query($SQL)) {

if ($AdminType === 'Accountant') {
                header('Location: EMPdashboard.php');
                exit(); 
            } elseif ($AdminType === 'Manager') {
                header('Location: MNdashboard.php');
                exit();
            } elseif ($AdminType === 'CEO') {
                header('Location: CEOdashboard.php');
                exit();
            } else {
                echo "Error: Invalid Admin Type.";
            }
    } else {
            echo "Error inserting into admin_login: " . $con->error;
        }
    }
} else {
    echo "Error: No user found with the provided NIC/Passport and credentials.";
}

$con->close();
?>
