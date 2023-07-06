<?php
// WAP in PHP to show + operation in array with duplicate subscript.
$x=["a"=>10,"b"=>20,"c"=>30,"d"=>40,"e"=>50,"f"=>'Ravi'];
$y=["g"=>60,"h"=>70,"i"=>80];

print_r($x);
print_r($y);
print_r($x+$y); // $x.add($y);
print_r($y+$x); // $y.add($x);

// subscript/index must be unique in the case of add.
// in the case of duplication of scubscript/index values will be over-write and latest value will be considered.
?>