<?php
// WAP in PHP to show that when break is mandatory in default and when not mandatory.
$n=readline("Enter the n value : ");
switch($n){
case 1:
   echo "case 1 is running. \n";
   break;
case 2:
   echo "case 2 is running. \n";
   break;
case 3: 
   echo "case 3 is running. \n";
   break;
case 4: 
   echo "case 4 is running. \n";
   break;
default:
    echo "default case is running.\n";
}
?>