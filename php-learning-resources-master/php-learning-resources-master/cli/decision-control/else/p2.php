<?php
// WAP in PHP to find co-ordinate according to given quadrant conditions.
$x=readline("Enter the x value : ");
$y=readline("Enter the y value : ");
if($x>0 and $y>0)
echo "First Co-ordinate";

else if($x>0 and $y<0)
echo "Second Co-ordinate";

else if($x<0 and $y<0)
echo "Third Co-ordinate";

else
echo "Fourth Co-ordinate";
?>