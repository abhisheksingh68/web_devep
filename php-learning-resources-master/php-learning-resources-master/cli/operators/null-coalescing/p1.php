<?php
$x=20;
echo "The value of x : $x";
echo PHP_EOL;
echo "The value of y : ".@$y; // undefined variable y
$z=10;
$z=isset($z)?10:null;
echo PHP_EOL;
echo "The value of z using ternary : ".$z; // undefined variable z
var_dump($z);
$z=isset($z)??null;
echo PHP_EOL;
echo "The value of z using null coalescing : ".$z; // undefined variable z
var_dump($z);
$p=(5<3)??null;
if($p){
echo "p if block is running...";
}else{
echo "p else block is running...";
}

$p=(5<3)?'':null;
if($p){
echo "p if block is running...";
}else{
echo "p else block is running...";
}
?>