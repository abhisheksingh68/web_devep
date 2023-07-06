<?php
// WAP in PHP to show append operation in string.
$name='Ravi';
$lname=' Kumar Singh';
$fullName=$name.$lname;
echo $fullName;

echo PHP_EOL;

$name='Ravi';
$lname=' Kumar Singh';
$name.=$lname;
echo $name;

echo PHP_EOL;

$name.=$lname;
echo $name;
?>