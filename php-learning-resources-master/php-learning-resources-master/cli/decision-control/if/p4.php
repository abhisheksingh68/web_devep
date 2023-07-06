<?php
// WAP in PHP to show odd / even using single if statement with exit statement.
$n=readline("Enter the number : ");
if($n%2==0){
echo "$n is even";
exit; 
}
echo "$n is odd";
?>