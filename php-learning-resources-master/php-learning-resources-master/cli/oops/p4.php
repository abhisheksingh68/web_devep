<?php
// WAP in PHP to show Instance variable and instance.
class Test{
var $a=10; // Instance variable
var $b=20; // Instance variable
var $c=30; // Instance variable
}
$x=10;
$test=new Test(); // Instance
var_dump($test);
var_dump($test instanceof Test); // instanceof operator
// Used to check if the given object is instance of test or not.
var_dump($x instanceof Test); // instanceof operator
?>