<?php
// echo getType($_REQUEST);
// print_r($_REQUEST);
$name=$_REQUEST['name'];
echo $name;
$email=$_REQUEST['email'];
echo $email;
printf("Hii Welcome, Mr. %s",$name);
?>