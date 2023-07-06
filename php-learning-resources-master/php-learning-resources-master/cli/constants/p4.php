<?php
// WAP in PHP to show case-insensitive constants.
echo true;
echo PHP_EOL;
echo True;
echo PHP_EOL;
echo TRUE;
echo PHP_EOL;
echo tRUE;
echo PHP_EOL;
echo TrUe;
echo PHP_EOL;

var_dump(true==TRUE);
var_dump(True==TRUE);
var_dump(True==TrUe);
var_dump(True==tRUE);
?>