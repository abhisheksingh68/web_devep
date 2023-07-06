<?php
// ctype_xdigit 
$string = readline("Enter a string : "); 
    if (ctype_xdigit ($string))
        echo "Yes\n";
    else 
        echo "No\n";
?>