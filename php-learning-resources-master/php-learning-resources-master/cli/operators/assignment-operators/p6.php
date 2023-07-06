<?php
$sum='Good';
$x=' Morning';

$sum = $sum.$x;
echo "The value of result without assignment : $sum \n";

$sum='Good';
$x=' Morning';

$sum.=$x;
echo "The value of result with assignment : $sum \n";
?>