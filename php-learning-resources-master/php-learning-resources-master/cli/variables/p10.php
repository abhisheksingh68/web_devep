<?php
// WAP in PHP to show nullable data type.
$x=null; // Doesn't exist
echo getType($x);
echo PHP_EOL;
var_dump(is_null($x));
var_dump(empty($x));
var_dump($x==null);
var_dump($x===null);
var_dump(''==null); // Implicit typecast have done.
var_dump(''===null);
echo 'Very very important';
echo PHP_EOL;
$y='';
var_dump($y);
var_dump(isset($y));
var_dump(isset($w));
var_dump(empty($x));
var_dump(isset($x));
var_dump($w);
var_dump($x);
?>