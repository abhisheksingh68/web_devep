<?php
// arsort() and krsort()
$arr = ["a"=>"10", "b"=>"20", "d"=>"40", "c"=>"30"];
arsort($arr);
print_r($arr);

krsort($arr);
print_r($arr);
?>