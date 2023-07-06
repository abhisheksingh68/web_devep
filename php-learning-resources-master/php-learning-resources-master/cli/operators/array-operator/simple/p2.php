<?php
// WAP in PHP to show + operation in array with duplicate subscript.
$x=[10,20,30,40,50,'Ravi'];
$y[0]=60;
$y[1]=70;
$y[2]=80;

print_r($x);
print_r($y);
print_r($x+$y); // $x.add($y);
print_r($y+$x); // $y.add($x);

// subscript/index must be unique in the case of add.
// in the case of duplication of scubscript/index values will be over-write and latest value will be considered.
?>