<?php
// WAP in PHP to show + operation in array with duplicate subscript.
$x=["a"=>10,"b"=>20,"c"=>30,"d"=>'Ravi'];
$y=["e"=>60,"f"=>70,"g"=>80,"h"=>90];

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