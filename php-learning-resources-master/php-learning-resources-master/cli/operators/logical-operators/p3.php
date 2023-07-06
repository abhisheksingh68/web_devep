<?php
// WAP in PHP to show implementation of && (Logical and) operator.
$x = readline("Enter the x value in range : ");
var_dump(($x<10 || $x>10) && ($x!=10));
var_dump(!(!($x<10) && !($x>10)));
?>