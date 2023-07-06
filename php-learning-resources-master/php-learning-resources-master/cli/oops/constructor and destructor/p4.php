<?php
// WAP in PHP to show non-parameterized constructor.
class Test{
public function __construct(){
echo "Constructor is running...";
echo PHP_EOL;
}
}
$tst = new Test;
$test = new Test();
$test->__construct();
?>