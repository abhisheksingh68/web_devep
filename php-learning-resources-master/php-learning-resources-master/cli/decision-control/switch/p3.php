<?php
// WAP in PHP to show chaining effect is switch statement.
$n=readline("Enter a number between 0-9 : ");
$i=0;
switch($n){
case 1:
echo "case ".$i++." is executing \n";
// break; return; exit, goto exit_label
case 2:
echo "case ".$i++." is executing \n";
case 3:
echo "case ".$i++." is executing \n";
case 4:
echo "case ".$i++." is executing \n";
case 5:
echo "case ".$i++." is executing \n";
case 6:
echo "case ".$i++." is executing \n";
case 7:
echo "case ".$i++." is executing \n";
case 8:
echo "case ".$i++." is executing \n";
case 9:
echo "case ".$i++." is executing \n";
default:
echo "default case $n is executing.";
}
?>