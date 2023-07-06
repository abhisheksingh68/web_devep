<?php
// WAP in PHP to show conditional block.
$n=readline("Enter the n value : ");
echo "First line ".__LINE__." is executing.\n";
if($n==5){
echo "Another line ".__LINE__." is executing.\n";
}
echo "Another line ".__LINE__." is executing.\n";
echo "Last line ".__LINE__." is executing.\n";
?>