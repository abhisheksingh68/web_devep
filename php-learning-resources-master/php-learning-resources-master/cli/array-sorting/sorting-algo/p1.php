<?php
// Linear sort
$a=[10];
$a=[10,20];
$a=[10,30,20,50,40,60];
for($i=0; $i<count($a); $i++){
for($j=$i+1; $j<count($a); $j++){
   if($a[$i]>$a[$j]){
      $temp=$a[$j];
      $a[$j]=$a[$i];
      $a[$i]=$temp;
   }
}
}
print_r($a);
?>