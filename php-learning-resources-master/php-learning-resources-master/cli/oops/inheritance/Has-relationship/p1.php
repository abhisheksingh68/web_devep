<?php
// Has-relationship
class A{
public function ktm_bike(){
echo 'This is a KTM RC 390';
echo PHP_EOL;
}
}
class B extends A{
public function cycle(){
echo 'This is a cycle.';
echo PHP_EOL;
}
}

$b=new B();
$b->cycle();
$b->ktm_bike();

$a=new A();
$a->ktm_bike();
?>