<?php
// ctype_alnum 
$string = readline("Enter a string : "); 
    if ( ctype_alnum($string))
        echo "Yes\n";
    else 
        echo "No\n";
?>