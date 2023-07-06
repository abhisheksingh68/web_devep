<?php
// WAP in PHP to find out consonents and vowels.
$chars=readline("Enter the characters : ");
(getType($chars=='string') and strlen($chars)==1) and ctype_alpha($chars) ?:exit("Invalid value supplied.");
$res='';
switch(strtolower($chars)){
case 'a':
case 'e':
case 'i':
case 'o':
case 'u':
$res='Vowel';
break;
default:
$res='Consonent';
break;
}
echo $res;
?>