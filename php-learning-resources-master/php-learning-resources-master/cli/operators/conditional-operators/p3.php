<?php
// Perfect Number (Using Recursion)
// Sum of factors(n) == n
// Explanation : Find out factor of inputted number, calculate sum of // factors, then compare sumOfFactors==Inputted Number

$n=readline('Enter the number : ');

$val = is_perfect($n) ? "$n is perfect number." : "$n is not a perfect number.";
echo $val;

/*
if(is_perfect($n)){
    echo "$n is perfect number.";
}else{
    echo "$n is not a perfect number.";
}
*/

function is_perfect($n, $i=1,$sum=0){
    if($i==$n){
       return false;
    }else{
    if($n%$i==0){
       $sum=$sum+$i;
    }
if($sum==$n){
    return true;
}
return is_perfect($n,$i+1,$sum);
}
}
?>