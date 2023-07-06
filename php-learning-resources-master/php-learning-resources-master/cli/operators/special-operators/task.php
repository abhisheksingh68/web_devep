<?php
// WAP in PHP to make user-defined string_repeat function which repeats the string n no. of times.

function str_multiply($str='',$n=0){
if($n==0){
return $str;
}
$x='';
for($i=0; $i<$n; $i++){
$x.=$str;
}
return $x;
}

$str=readline("Enter the string : ");
$count=readline("Enter the count : ");
echo str_multiply($str,$count);
?>