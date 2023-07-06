<?php
// asort() and ksort()
$array = ["a"=>"Apple","c"=>"Cat", "d"=>"Dog","b"=>"Ball",];
asort($array);
print_r($array);
asort($array);
print_r($array);
ksort($array);
print_r($array);
?>