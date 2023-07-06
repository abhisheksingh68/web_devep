<?php
// WAP in PHP to show setter and getter.
class Test{
public $a=10;
public $b=20;
var $c=30;
public function setValue($a,$b,$c){
$this->a=$a;
$this->b=$b;
$this->c=$c;
}
public function getValue(){
echo "The value of member a from getter = {$this->a} \n";
echo "The value of member b from getter = {$this->b} \n";
echo "The value of member c from getter = {$this->c} \n";
}
}

$test = new Test();

echo "The value of member a before setter = {$test->a} \n";
echo "The value of member b before setter = {$test->b} \n";
echo "The value of member c before setter = {$test->c} \n";
echo "       ************************\n";

$test->setValue(100,200,300); // Setter

echo "The value of member a after setter = {$test->a} \n";
echo "The value of member b after setter = {$test->b} \n";
echo "The value of member c after setter = {$test->c} \n";
echo "       ************************\n";

$test->getValue(); // Getter

?>