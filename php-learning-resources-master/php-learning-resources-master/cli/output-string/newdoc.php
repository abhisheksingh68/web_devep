<?php
// WAP in PHP to show newdoc string.
$a=100;
echo <<< 'BLOCK'
This is a newdoc string, $a \n
	“This is again new line of string “$a” ”

'This string is inside $a single quotes \t tabbed' = $a
BLOCK;

$code=<<< 'BLOCK'
This is a newdoc string, $a \n
	“This is again new line of string “$a” ”

'This string is inside $a single quotes \t tabbed' = $a
BLOCK;
echo $code;
?>