<?php
// WAP in PHP to show floating point numbers.
$x=011; // Octal number system
echo $x;
echo PHP_EOL;
#$a=08; // Invalid numeric literal (Conversion to octal range not possible)
#echo $a;

$b=10.5;
echo $b;
echo PHP_EOL;
echo getType($b);
echo PHP_EOL;
var_dump($b);

echo PHP_EOL;
$c=10.0;
echo $c;

echo PHP_EOL;
$d=10.0000;
echo $c;
echo PHP_EOL;
echo getType($c);
var_dump($b);

echo PHP_EOL;
$d=(int)$c;
echo $d;
echo PHP_EOL;
echo getType($d);

echo PHP_EOL;
$z=0.5;
echo $z;
echo PHP_EOL;
echo getType($z);
var_dump($z);

echo PHP_EOL;
$w=.5; // $w.=5 (Concatenation)
echo $w;
echo PHP_EOL;
echo getType($w);
echo PHP_EOL;
var_dump($w);

echo PHP_EOL;
$p='a';
$p.=$w;
echo $p;
echo PHP_EOL;
echo getType($p);

echo PHP_EOL;
$marks=9.99999999999999999; // 16-bits characters range
echo $marks;
echo PHP_EOL;
echo getType($marks);
echo PHP_EOL;
var_dump($marks);

?>