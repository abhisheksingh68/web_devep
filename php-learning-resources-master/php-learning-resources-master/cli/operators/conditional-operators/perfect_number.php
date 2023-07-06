<?php
// Perfect Number
// Sum of factors(n) == n
// Explanation : Find out factor of inputted number, calculate sum of // factors, then compare sumOfFactors==Inputted Number

$n=readline('Enter the number : ');
$sum=0;
for($i=1; $i<$n; $i++){
    if($n%$i==0){
        $sum=$sum+$i;
    }
}
if($sum==$n){
    echo "Perfect Number";
}else{
    echo "Not a Perfect Number";
}
?>