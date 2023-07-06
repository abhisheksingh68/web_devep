<?php
$code="<?php \n\n";
$code.="//WAP in PHP to show only valid 256 cases in switch \n";
$code.='$n=readline("Enter a number between 1 to 100000 : "); '."\n";
$code.='switch($n){ '."\n";

for($i=1; $i<100000; $i++)
{
$code.='case '.$i.':'."\n";
$code.='echo '.' "case '.$i.' is executing \n"; '."\n";
}
$code.="default: \n";
$code.='echo '.' "default case is executing...\n"; '."\n";
$code.="}";

$fp=fopen("p6.php","w+");
fwrite($fp,$code);
fclose($fp);
?>