<?php

include_once __DIR__.'/connection/dbconnect.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$sql = "INSERT INTO register (`fname`, `lname`, `email`, `password`, `cpassword`) VALUES ('{$fname}', '{$lname}', '{$email}', '{$password}', '{$cpassword}');";

if(mysqli_query($conn, $sql)){
    header("Location: index.php");
}else{
    echo "Record not inserted".mysqli_error($conn);
}
