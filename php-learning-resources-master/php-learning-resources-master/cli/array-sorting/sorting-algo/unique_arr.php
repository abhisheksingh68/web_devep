<?php
// array_unique();
$a=[10,20,20,10,30,50,30,60];
$arr=[];
for($i=0; $i<count($a); $i++){
if(!in_array($a[$i],$arr)){
$arr[]=$a[$i];
}
}
print_r($arr);

$keys=[];
for($i=0; $i<count($a); $i++){
$keys[$a[$i]] = $a[$i];
}
print_r($keys);

$arr_unique = array_flip(array_flip(array_values($a)));
print_r($arr_unique);
?>