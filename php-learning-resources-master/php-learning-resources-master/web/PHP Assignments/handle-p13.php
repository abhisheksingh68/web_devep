<?php
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$msg="";
if($num1>$num2){
    while($num2>0){
        $num1++;
        $num2--;
    }
    echo $num1;
}else{
    $msg="Number 1 should be greater than number 2.";
    echo $msg;
}
?>
