<?php
// WAP in PHP to show non-static increments.
function increments(){
$i=0;
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