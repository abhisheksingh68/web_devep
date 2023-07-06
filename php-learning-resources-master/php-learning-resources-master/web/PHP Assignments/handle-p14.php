<?php
$sub1=$_REQUEST['sub1'];
$sub2=$_REQUEST['sub2'];
$sub3=$_REQUEST['sub3'];
$sub4=$_REQUEST['sub4'];
$sub5=$_REQUEST['sub5'];
printf("Subject 1 : %s", $sub1);
echo "<br>";
printf("Subject 2 : %s", $sub2);
echo "<br>";
printf("Subject 3 : %s", $sub3);
echo "<br>";
printf("Subject 4 : %s", $sub4);
echo "<br>";
printf("Subject 5 : %s", $sub5);
echo "<br>";
echo "<br>";
$percentage=(($sub1+$sub2+$sub3+$sub4+$sub5)/250)*100;
printf("Overall Percentage : %.2f", $percentage."%");
?>