<?php
// WAP in PHP to show problem with dynamic nature of /
$x=readline('Enter the x value : ');
$y=readline('Enter the y value : ');

printf("The division: %d \n",$x%$y);
printf("The division: %f \n",$x%$y);
echo "The division = ";
echo $x/$y;
?>