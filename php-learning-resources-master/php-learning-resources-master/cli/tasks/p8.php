<?php
// ctype_punct 
$string = readline("Enter a string : "); 
    if (ctype_punct ($string))
        echo "Yes\n";
    else 
        echo "No\n";
?>