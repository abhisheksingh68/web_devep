<?php
// WAP in PHP to show total pre-defined constants.
$count=count(get_defined_constants());
printf("The total constants=%d",$count);
print_r(get_defined_constants());
?>