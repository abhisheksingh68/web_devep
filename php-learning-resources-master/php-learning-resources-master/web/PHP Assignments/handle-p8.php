<?php
$pa=$_REQUEST['pa'];
$rate=$_REQUEST['rate'];
$time=$_REQUEST['time'];
$SimpleInterest=($pa*$rate*$time)/100;
printf("Simple Interest : %.2f", $SimpleInterest);
?>
