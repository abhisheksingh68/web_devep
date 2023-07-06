<?php
// WAP in PHP to show nullable and empty variable.
$x='';
var_dump($x);
echo PHP_EOL;
var_dump($x=='');
echo PHP_EOL;
var_dump($x=="");
echo PHP_EOL;
var_dump($x==='');
echo PHP_EOL;
var_dump($x==="");
echo PHP_EOL;
var_dump(empty($x));
echo PHP_EOL;
var_dump(empty(''));
echo PHP_EOL;
var_dump(empty(""));
$y="";
var_dump($y);
echo PHP_EOL;
var_dump($x==$y);
echo PHP_EOL;
var_dump($x===$y);
?>