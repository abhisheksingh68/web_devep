<?php

include_once __DIR__.'/connection/dbconnect.php';

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$sql = "UPDATE register SET fname = '{$fname}', lname = '{$lname}', email = '{$email}', password = '{$password}', cpassword = '{$cpassword}' WHERE id = {$id};";
if(mysqli_query($conn, $sql) or die("Query unsuccessful...")){
    header("Location: read.php");
}else{
    echo "Record not updated".mysqli_error($conn);
}
?>