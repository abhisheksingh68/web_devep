<?php
// ctype_cntrl 
$string = readline("Enter a string : "); 
    if ( ctype_cntrl ($string))
        echo "Yes\n";
    else 
        echo "No\n";
?>