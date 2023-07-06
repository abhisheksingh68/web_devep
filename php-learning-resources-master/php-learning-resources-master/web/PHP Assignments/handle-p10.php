<?php
define("PIE",3.14);
$rad=$_REQUEST['rad'];
$areaOfCircle=PIE*$rad*$rad;
$circumferemceOfCircle=2*PIE*$rad;
printf("Area of Circle : %.2f", $areaOfCircle);
echo "<br>";
printf("Circumference of Circle : %.2f", $circumferemceOfCircle);
?>
