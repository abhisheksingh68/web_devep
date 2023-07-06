<?php
// Fatal error
function test(){
echo 'Hello from test function';
}
test();

// Re-declaration of test()
function test(){
echo 'Hello from test function';
}
test();
?>