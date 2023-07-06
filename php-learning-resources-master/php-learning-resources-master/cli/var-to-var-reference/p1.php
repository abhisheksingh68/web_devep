<?php
// WAP in PHP to show var-to-var-reference.
$name='Deep';
echo $name;
echo PHP_EOL;
$$name=500;
printf("The value of Deep=%s",$Deep);
?>