<?php
// WAP in PHP to show odd / even using single if statement with return statement.
$n=readline("Enter the number : ");
if($n%2==0){
echo "$n is even";
return; // exit (not recomended)
}
echo "$n is odd";
?>