<?php
// WAP in PHP to find out odd and even number using switch statement.
$num=readline("Enter a number : ");
switch($num%2){
case 0:
echo "$num is even";
break;
case 1:
echo "$num is odd";
break;
}
?>