<?php
require "connection.php";

$idNo = $_POST["NID"];
$sql="DELETE from employee_data where NIC_Passport = '$idNo'";

IF($con->query($sql)){
    echo "deletd";
}else{
    echo "Error deleting employee data: " . $con->error;
    
}

?>