<?php
// Perfect Number (Using Recursion)
// Sum of factors(n) == n
// Explanation : Find out factor of inputted number, calculate sum of // factors, then compare sumOfFactors==Inputted Number

$n=readline('Enter the number : ');

$val = is_perfect($n) ? "$n is perfect number." : "$n is not a perfect number.";
echo $val;

function is_perfect($n, $i=1, $sum=0){
    $return = ($i==$n) ? false : ($sum = ($n%$i==0) ? $sum+=$i : is_perfect($n, $i+1, $sum));
    return $return;
}
?>