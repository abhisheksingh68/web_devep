<?php
// WAP in PHP to show string concatenation.
$x='life';
$y=' partner';
var_dump(getType($x));
var_dump(getType($y));
var_dump($x.$y);
var_dump(getType($x.$y));

$x=10;
$y=20;
var_dump($x.$y);
var_dump(getType($x.$y));

$res='The sum is : ';
echo $res.($x+$y);
// PHP allows mathematical evaluation only after using parenthesis otherwise non-numeric value encountered error will be occured.
?>

