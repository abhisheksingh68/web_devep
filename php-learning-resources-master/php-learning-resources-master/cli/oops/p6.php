<?php
// WAP in PHP to show variables and methods.
class Test{
var $a=10;
var $b=20;
function add(){
$a=100;
$b=200;
echo $a+$b."\n";
echo 'This is a add function (instance variable)'.PHP_EOL;
echo $this->a + $this->b;
echo PHP_EOL;
var_dump($this);
}
}
$test=new Test();
$test->add();
var_dump($test);
?>