<?php
echo 'Be aware b/w empty and <space>';
echo PHP_EOL;
printf("The value from empty:",'');
echo PHP_EOL;
printf("The value from empty space : ",' ');
echo PHP_EOL;
var_dump(''==' ');
var_dump(''===' ');
echo PHP_EOL;
echo '';
echo PHP_EOL;
echo getType('');
echo PHP_EOL;
echo strlen('');
echo PHP_EOL;
echo ' ';
echo PHP_EOL;
echo getType(' ');
echo PHP_EOL;
echo ord(' '); // Prints ASCII
echo PHP_EOL;
echo ord('a'); // Prints ASCII
?>