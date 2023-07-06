<?php
// WAP in PHP to show no return type of constructor function with parameter.
class Test{
public funtion __construct($a){
echo 'Parameterized  function constructor is calling automatically...';
echo PHP_EOL;
return $a+10;
}
}
# Object creation
$test = new Test(10); // Implicitly invoked
$x = $test->__construct(10); // Explicitly invoked
echo $x;
?>