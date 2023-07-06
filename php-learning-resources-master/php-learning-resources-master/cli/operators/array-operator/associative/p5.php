<?php
// WAP in PHP to show + operation in array with duplicate subscript.
$x=["a"=>10,"b"=>20,"c"=>30,"d"=>40];
$y=["a"=>60,"b"=>70,"c"=>80,"d"=>90];

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