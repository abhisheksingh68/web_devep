<?php
// WAP in PHP to show parameterized constructor.
class Test{
public function __construct($name,$profession){
echo $name;
echo PHP_EOL;
echo $profession;
}
}
$test = new Test('Deep', 'Web Developer');
?>