<?php
// WAP in PHP to show + operation in array with duplicate subscript.
$x=[10,20,30,'Ravi'];
$y[0]=60; // $y=[60,70,80,90];
$y[1]=70;
$y[2]=80;
$y[3]=90;

echo "The count of x ".count($x);
echo PHP_EOL;
echo "The count of y ".count($y);
echo PHP_EOL;
var_dump(count($x)==count($y));
print_r($x);
print_r($y);
print_r($x+$y);
print_r($y+$x);
var_dump(($x+$y)==($y+$x)); // equal
var_dump(($x+$y)!=($y+$x)); // unequal
var_dump(($x+$y)===($y+$x)); // equal not identical
var_dump(($x+$y)==($x)); // equal
var_dump(($x+$y)===($x)); // identical
var_dump(($y+$x)==($y)); // equal
var_dump(($y+$x)===($y)); // identical
var_dump(($x+$y)!==($y+$x)); //not identical
var_dump(($y+$x)===($y+$x)); // equal and identical
?>