<?php
// WAP in PHP to show that when break is optional at (n+1)th position not used break.
$n=readline("Enter the n value : ");
switch($n){
case 1:
   echo "case 1 is running. \n";
   break;
case 2:
   echo "case 2 is running. \n";
   break;
default:
    echo "default case is running.\n";
case 3: 
   echo "case 3 is running. \n";
   break;
case 4: 
   echo "case 4 is running. \n";
   break;
}
?>