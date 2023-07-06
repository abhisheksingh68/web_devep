<?php
// WAP in PHP to find sum of all the arguments supplied.
print_r($argv);
$sum=0;
$avg=0;
for($i=1; $i<$argc; $i++){
$sum=$sum+(int)$argv[$i];
}
$avg=$sum/($argc-1);
printf("The sum = %d\n",$sum);
printf("The average = %d\n",$avg);
?>
