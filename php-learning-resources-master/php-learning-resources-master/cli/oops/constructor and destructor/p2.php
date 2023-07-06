<?php
// WAP in PHP to show destructor.
class Test{
public $a;
public function __construct(){
     $this->a = 10;
     echo "Automatically Calling...";
     echo PHP_EOL;
}
public function greet(){
     echo "Good Morning!";
     echo PHP_EOL;
}
public function __destruct(){
     echo "Automatically Calling...";
     echo PHP_EOL;
     unset($this->a);
     $this->show_a();
}
public function show_a(){
     echo "The value of a after destructor called is : ".$this->a;
}
}

$test = new Test();
echo $test->a;
$test->greet();
echo $test->a;
?>