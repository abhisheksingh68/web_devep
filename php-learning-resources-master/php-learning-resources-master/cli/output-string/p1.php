<?php
// WAP in PHP to show '' inside '' quotes is invalid.
echo 'How are you?'; // valid
echo PHP_EOL; 
echo "Disha"; // valid

echo PHP_EOL;
#echo 'I don't like .NET'; // parse error
echo PHP_EOL;
echo 'I don`t like .NET'; // valid

echo PHP_EOL;
echo "This is single quote's inside double";
echo PHP_EOL;
echo "This is single back tick quote`s inside double";

echo PHP_EOL;

?>