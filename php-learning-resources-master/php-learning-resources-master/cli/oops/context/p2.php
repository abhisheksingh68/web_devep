<?php
// WAP in PHP to show static keywords functionality with increments.
function increments(){
static $i=0;
echo 'Before incrementing...'.PHP_EOL;
echo $i;
echo PHP_EOL;
$i++;
echo 'After incrementing...'.PHP_EOL;
echo $i;
echo PHP_EOL;
}
increments();
increments();
increments();
?>