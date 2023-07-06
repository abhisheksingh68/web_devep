<?php
// WAP in PHP to show class and objects in PHP.
class Tv{
var $model='XL TV';
var $type='LED';
var $price=50000;
var $color='Black';
var $varient='Curved';
public function showInfo(){
echo "The model of ".__CLASS__." {$this->model} \n";
echo "The type of ".__CLASS__." {$this->type} \n";
echo "The price of ".__CLASS__." {$this->price} \n";
echo "The color of ".__CLASS__." {$this->color} \n";
echo "The varient of ".__CLASS__." {$this->varient} \n";
}

public function volume(){
echo "Volume up";
}
}

$tv=new Tv(); // Object
$tv->showInfo(); // Function calling
echo "Tv volume is : ";
echo "{$tv->volume()}";
?>