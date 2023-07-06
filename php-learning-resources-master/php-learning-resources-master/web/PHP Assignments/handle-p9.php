<?php
$length=$_REQUEST['length'];
$width=$_REQUEST['width'];
$areaOfRect=$length*$width;
$permiterOfRect=2*($length+$width);
printf("Area of Rectangle : %.2f",$areaOfRect);
echo "<br>";
printf("Permiter of Rectangle : %.2f",$permiterOfRect);
?>
