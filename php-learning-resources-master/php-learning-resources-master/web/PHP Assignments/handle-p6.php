<?php
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$opr=$_REQUEST['opr'];
switch($opr){
    case '+':
        printf("Sum is : %d",($num1+$num2));
        break;
    case '-':
        printf("Subtraction is : %d",($num1-$num2));
        break;
    case '*':
        printf("Multiplication is : %d",($num1*$num2));
        break;
    case '/':
        printf("Divison is : %.2f",($num1/$num2));
        break;
    default:
        printf("Invalid Operation");
}
?>
