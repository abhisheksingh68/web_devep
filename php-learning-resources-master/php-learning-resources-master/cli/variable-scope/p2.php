<?php
// WAP in PHP to show local and global scope of variable.
$a=10;
echo "The value of a at global scope is : $a"; // 10
echo PHP_EOL;

function display(){
$b=200;
global $a;
echo "The value of global a at local scope is : $a"; // get the variable from heap
echo PHP_EOL;
echo "The value of local b at local scope is : $b"; // 200
}
display();

echo PHP_EOL;
echo "The value of a at global scope is : $a"; // 10
?>