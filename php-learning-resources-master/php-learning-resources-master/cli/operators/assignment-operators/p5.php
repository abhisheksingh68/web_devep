<?php
// WAP in PHP to show implementation of assignment operator (=).
$mod=10;
$n=3;

$mod=$mod%$n;
echo "Modulo without assignment : $mod \n";

$mod%=$n;
echo "Modulo with assignment : $mod \n";
?>