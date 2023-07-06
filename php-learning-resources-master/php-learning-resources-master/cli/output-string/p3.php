<?php
// WAP in PHP to show raw strings.
echo 'This is a simple raw string.';
echo PHP_EOL;
echo "This is a processed string.";
echo PHP_EOL;

// escape sequence
echo 'This is a \t tabbed line.';
echo PHP_EOL;
echo "This is a \t tabbed line.";

echo 'This is a \n tabbed line.';
echo PHP_EOL;
echo "This is a \n tabbed line.";

// with variables
$name='Ravi';
$class='Btech';
$rollno=1001;
echo 'Name = $name, Class=$class, rollno=$rollno, inside single quotes';
echo PHP_EOL;
echo "Name=$name, Class=$class, rollno=$rollno, inside double quotes";
?>