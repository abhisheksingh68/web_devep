<?php
// WAP in PHP to show constants are global inside.

define('GRAVITY',10);
printf("The value of GRAVITY at global scope : %d \n",GRAVITY);

$gravity=9.8;
printf("The value of gravity at global scope : %d \n",$gravity);

class Test{
private $g;   // variable
private $G;   // constant

public function __construct(){
$this->G=GRAVITY;
$this->g=$gravity;

printf("The value of GRAVITY inside method : %d \n",GRAVITY);
printf("The value of gravity inside method : %d \n",$gravity);

printf("The value of gravity using g for class : %d \n",$this->g);
printf("The value of gravity using G for class : %d \n",$this->G);
}
}
$test=new Test();
?>