<?php
// WAP in PHP to show global scope variable defined from local scope.
$a=10;
echo "The value of a from global : $a";
echo PHP_EOL;

function test1(){
global $a, $b;
$b=30;
echo "The value of a from global inside test 1 : $a";
echo PHP_EOL;
echo "The value of a from local inside test 1 : $b";
echo PHP_EOL;
}
test1();

echo "The value of b from global scope outside : $b";
echo PHP_EOL;
$b=100;

function test2(){
global $a, $b;
echo "The value of a from global inside test 2 : $a";
echo PHP_EOL;
echo "The value of a from local inside test 2 : $b";
echo PHP_EOL;
}
test2();
?>