<?php
// WAP in PHP to show super global variable.
$a=20; // Automatically assigned to $GLOBALS in the form of key
$b=30; // Automatically assigned to $GLOBALS in the form of key
print_r($GLOBALS);
function display(){
$a=100;
$b=200;

echo "The value of a from local : $a";
echo PHP_EOL;
echo "The value of b from local : $b";
echo PHP_EOL;

echo "The value of a from global using super global : {$GLOBALS['a']}";
echo PHP_EOL;
echo "The value of b from global using super global : {$GLOBALS['b']}";
echo PHP_EOL;
$a=$GLOBALS['a'];
$b=$GLOBALS['b'];
echo "The value of a from global without using global keyword : $a";
echo PHP_EOL;
echo "The value of b from global without using global keyword : $b";
echo PHP_EOL;

// OR

global $a, $b;
echo "The value of a from global with using global keyword : $a";
echo PHP_EOL;
echo "The value of b from global with using global keyword : $b";

}
display();
?>