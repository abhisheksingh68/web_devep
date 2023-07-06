<?php
// WAP in PHP to show object.
class Test{
var $a=10;
var $b=20;
var $c=30;
}
$test = new Test(); // Instantiation
var_dump($test);
$test = Test(); // Assignment
$test = 10;
var_dump($test); // Assignment
function Test(){
return 'Hy from Test Function.';
}
?>