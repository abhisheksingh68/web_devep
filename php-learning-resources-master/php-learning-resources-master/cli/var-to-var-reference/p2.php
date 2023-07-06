<?php
// WAP in PHP to show var-to-var referene.
$x='10';
echo $x;
echo PHP_EOL;

$y='Ravi'; 
echo $y;

echo PHP_EOL;
$Ravi=50;
echo $Ravi;
echo PHP_EOL;

$w='_100';
$$w='King';

printf("The value of w=%s\n",$w);
printf("The value of King=%d\n",$$w);
printf("The value of _100=%s\n",$_100);

$exp='x';
echo $exp;
echo PHP_EOL;
echo getType($exp);
echo PHP_EOL;
echo $$exp;

echo PHP_EOL;
$student['name']='Suraj';
$student['class']='Btech';

foreach($student as $key => $value){
$$key=$value;
printf("%s : %s\n", $key,$value);
}
echo $name;
echo PHP_EOL;
echo $class;

echo 'Without using variable to variable';
echo PHP_EOL;

$car['name']='Hyundai';
$car['class']='1st Class';
$car['price']='20 Lakhs';
extract($car);

printf("The name of car : %s\n",$name);
printf("The class of car : %s\n",$class);
printf("The price of car : %s\n",$price);

?>