<?php
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
while($num1>$num2){
    $num1=$num1-$num2;
}
printf("Remainder : %d", $num1);
?>
