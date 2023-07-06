<?php
// WAP in PHP to show difference b/w pre-defined error level and user-defined error level.
error_reporting(E_NOTICE);
printf("The value of true : %d \n",true);
printf("The value of TRUE : %d \n",TRUE);
printf("true is an incase-sensitive constant : %d \n",(TRUE==1));
define('true',10,1);
printf("The value of true after re-declaration : %d \n",true);
?>