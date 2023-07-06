<?php
// WAP in PHP to show + operation in array with duplicate subscript.
$x=[10,20,30,40];
$y[0]=60; // $y=[60,70,80,90];
$y[1]=70;
$y[2]=80;
$y[3]=90;
$y[4]=100;

echo "The count of x ".count($x);
echo PHP_EOL;
echo "The count of y ".count($y);
echo PHP_EOL;
var_dump(count($x)==count($y));
print_r($x);
print_r($y);
print_r($x+$y);
print_r($y+$x);

// Overwrite duplicates and insert the uniques.
// Final array = Extra element + Replaced element
?>