<?php
// WAP in PHP to show Relational Operators Working.
// Type : Equality

$a=20;
$b=20;
var_dump($a==$b);
var_dump(getType($a));
var_dump($a===$b);
var_dump(getType($b));

$a='20';
$b=20;

var_dump($a==$b);
var_dump(getType($a));
var_dump($a===$b);
var_dump(getType($b));
?>