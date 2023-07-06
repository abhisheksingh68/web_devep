<?php
$n=readline('Enter the number : ');

$a=($n>0)?$n:-($n);
echo "|$a| = $a";

echo PHP_EOL;
echo "********************";
echo PHP_EOL;


$x=($n%2) ? 'Odd' : 'Even';
echo $x;

echo PHP_EOL;
echo "********************";
echo PHP_EOL;


$y=($n>0) ? '+ve' : '-ve';
echo $y;
echo PHP_EOL;
?>