<?php
// WAP in PHP to show case sensitive constant.
define('gravity',10); // lowercase
define('Gravity',20); // Capitalize
define('GRAVITY',30); // Uppercase
define('gRAVITY',40); // Toggle Case

echo gravity;
echo PHP_EOL;
echo Gravity;
echo PHP_EOL;
echo GRAVITY;
echo PHP_EOL;
echo gRAVITY;
?>