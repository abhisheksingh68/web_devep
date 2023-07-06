<?php
// wap in php to show boolean false stored in variable.
$x=false;
echo $x;
echo PHP_EOL;
echo getType($x); // boolean
echo PHP_EOL;
var_dump($x); // bool(false)
echo json_encode($x); // raw format

echo PHP_EOL;
echo 'On comaring the values : ';
echo PHP_EOL;
echo (false==False);
echo PHP_EOL;
echo (false==FALSE);
echo PHP_EOL;
var_dump (0==FALSE); // Type is optional only content match 
echo PHP_EOL;
var_dump (0==false); // var_dump (0==(int)false); // Implicit conversion // PHP dynamic
echo PHP_EOL;
var_dump (0===false); Type + Content will be matched together
?>