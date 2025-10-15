<?php
require 'connection.php';
$Nid = $_POST["id"];
$name = $_POST["name"];
$nameini = $_POST["name_ini"];
$DOB = $_POST["dateOfB"];
$gender = $_POST["gen"];
$nic = $_POST["Nnic"];
$A_street = $_POST["Street"];
$city = $_POST["City"];
$country = $_POST["Country"];
$TphoneNo = $_POST["Tphone"];
$Email = $_POST["Email"];
$EMPstatus = $_POST["empstatus"];
$EMPname = $_POST["empname"];
$EMPaddress = $_POST["empaddress"];
$aincome = $_POST["Aincome"];
$sfunds = $_POST["Sfunds"];
$stype = $_POST["Stype"];


$sql="UPDATE savingaccount_data set FullName='$name',NameWinitials='$nameini',DOB='$DOB',Gender='$gender',
NIC_Passport='$nic',A_street='$A_street',City='$city',Country='$country',PhoneNo='$TphoneNo',Email='$Email',
EmployeeStatus='$EMPstatus',EmployerName='$EMPname',EmployerAddress='$EMPaddress',AnnualIncome='$aincome',SourceOfFunds='$sfunds',
SavingType='$stype'
where NIC_Passport='$Nid'";

$con->query($sql);
$con->close();
?>