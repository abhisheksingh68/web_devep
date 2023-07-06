<?php
// WAP in PHP to check an array is homogeneous or heterogeneous.
function is_homo($array=[]){
	$key_type=getType($array[0]);
	for($i=0; $i<count($array); $i++){
	// echo getType(array[$i]);
	// echo PHP_EOL;
	     if($key_type===getType($array[$i])){
	     
	     }else{
	     return false;
	     }
	}
	return true;
}
var_dump(is_homo($argv));
var_dump(is_homo([10,20,30,40,50]));
?>