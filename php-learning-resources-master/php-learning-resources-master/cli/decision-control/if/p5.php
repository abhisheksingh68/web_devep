<?php
// WAP in PHP to show odd / even using single if statement and goto statement.
$n=readline("Enter the number : ");
if($n%2==0){
echo "$n is even";
goto exit_label; 
}
echo "$n is odd";
exit_label:;
?>