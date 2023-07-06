<?php
// Scanner Function
function input($msg=' '){
if($msg==' '){
  exit('Message is required');
}
echo $msg;
$input=fgets(STDIN,1024);
return trim($input);
}
?>