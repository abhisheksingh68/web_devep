<?php
// WAP in PHP to show re-declaration errors in constants.
define('gravity',10);
echo gravity;
echo PHP_EOL;
define('Gravity',10.5);
echo Gravity; 
// re-declaration error.
define('gravity',20);
echo gravity;

?>