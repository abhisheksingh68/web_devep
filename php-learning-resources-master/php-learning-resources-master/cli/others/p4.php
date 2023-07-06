<?php
$fp=fopen('deeproshan.txt','r');
$txt=fgets($fp,1024);
echo $txt;
?>