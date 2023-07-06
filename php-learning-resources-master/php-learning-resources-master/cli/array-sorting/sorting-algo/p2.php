<?php
// Binary Sort
$arr = [30,20,40];
for($i=0; $i<count($arr); $i++){
$mid = count($arr)/2;
if($arr[$mid]<$arr[0]){
$temp=$arr[0];
$arr[0]=$arr[$mid];
$arr[$mid]=$temp;
}
}
print_r($arr);
?>