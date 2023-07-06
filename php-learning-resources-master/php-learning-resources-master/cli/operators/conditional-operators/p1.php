<?php
// WAP in PHP to show example of if-else.

$a=readline('Enter a value : ');
if($a>2) {$x='Hii';} else{$x='Hello';}
$x=($a>2) ? 'Hii' : 'Hello';
echo "The value of x using if-else $x \n";
echo "The value of x using ternary $x \n";
?>