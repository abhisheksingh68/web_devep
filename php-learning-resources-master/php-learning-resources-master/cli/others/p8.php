<?php
$num1=readline("Enter the first number : ");
$num2=readline("Enter the second number : ");
#echo add($num1,$num2);
function add($num1=0,$num2=0){
return $num1+$num2;
}
printf("The result with 0 argument : %d\n",add());
printf("The result with 1 argument : %d\n",add($num1));
printf("The result with 1 argument : %d\n",add($num2));
printf("The result with 0 argument : %d\n",add($num1,$num2));
?>