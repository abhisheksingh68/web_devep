<?php
// WAP in PHP show core php file.

echo 'This line from core php file';
echo PHP_EOL;

function test(){
echo 'This is a function from core php file.';
echo PHP_EOL;
}
test();

class Test{
public function display(){
echo 'This is display method from test class from core php file.';
echo PHP_EOL;
}
};

$test=new Test();
$test->display();

echo '<h1>This is HTML heading Tag</h1>';
// Optional closing