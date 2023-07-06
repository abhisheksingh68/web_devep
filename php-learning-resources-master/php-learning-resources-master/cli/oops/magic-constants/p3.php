<?php
// WAP in PHP to show __CLASS__, __FUNCTION__, __METHOD__ (magic constants).
class laptop{
public function display(){
echo "Calling from display method from class - ".__CLASS__.": ".__METHOD__;
echo PHP_EOL;
echo "Calling from display method - ".__CLASS__.":".__FUNCTION__;
echo PHP_EOL;
echo "The method name from class TV = ".__CLASS__." :: ".__FUNCTION__;
echo PHP_EOL;
var_dump((__CLASS__." :: ".__FUNCTION__)==__METHOD__);
} 
}
display();
$lptp = new laptop();
$lptp -> display();
function display(){
echo "Calling from display function - ".__METHOD__;
echo PHP_EOL;
echo "Calling from display function - ".__FUNCTION__;
echo PHP_EOL;
}
?>