<?php
// WAP in PHP to show 

class Tv{
public $color="black";
public $size="23";
public $price=25000;
public $type="LED";
public $company="LG";

public function info(){
echo "The color = {$this->color} \n";
echo "The size = {$this->size} \n";
echo "The price = {$this->price} \n";
echo "The type = {$this->type} \n";
echo "The company = {$this->company} \n";
}

public function volumeUp(){
echo "Volume ++ \n";
}

public function volumeDown(){
echo "Volume -- \n";
}

public function on(){
echo "Tv On \n";
}

public function off(){
echo "Off \n";
}
}

// Anonymous Object
(new Tv)->info();
(new Tv)->volumeUp();
(new Tv)->volumeDown();
(new Tv)->on();
(new Tv)->off();

// Reference Variable / Object
$remote=new Tv();
$remote->info();
$remote->volumeUp();
$remote->volumeDown();
$remote->on();
$remote->off();

?>