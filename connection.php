<?php

$con=new mysqli("localhost","root","","banking_db");

if($con->connect_error){
    die("connection field"."<br>".$con->connect_error);
}


?>