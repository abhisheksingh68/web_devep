<?php
// WAP in PHP to show static context.
class Test{
public $a = 300;
public static $b = 400;
public function get_a(){
echo "The value from non-static context = {$this->a} \n";
echo "The value from static context =";
// echo Test::$a; #error due to accessing non-static a from static context.
echo PHP_EOL;
}

public static function get_b(){
// echo "The value from non-static context {$this->a} \n";
echo PHP_EOL;
echo "The value from static context =";
echo Test::$b;
// echo $this->b; #error due to $this object context from static context b.
}
}
$test = new Test();
$test->get_a();
// Test::get_a(); #error get_a() scope not-static it can't be called by class context.
$test->get_b();
Test::get_b();
?>