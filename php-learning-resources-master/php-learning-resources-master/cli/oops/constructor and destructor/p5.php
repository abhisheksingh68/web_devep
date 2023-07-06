<?php
// WAP in PHP to show no return type of constructor.
class Test{
public funtion __construct(){
echo 'Constructor is calling automatically...';
echo PHP_EOL;
return 10;
}
}
# Object creation
$test = new Test();
$test = new test;
echo $test; // Implicitly invoked
$x = $test->__construct(); // Explicitly invoked
echo $x;
?>