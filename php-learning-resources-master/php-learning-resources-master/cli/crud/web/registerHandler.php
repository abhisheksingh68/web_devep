<?php
include_once __DIR__.'/function.php';
include_once __DIR__.'/query-builder/query.php';

$name=post('name');
$email=post('email');
//echo $name;
//echo $email;
$query = new Query();
if(
$query->insert('emp',[
    "name"=>$name,
    "email"=>$email,
]))

{
    //echo "data inserted with PK=".$query->getId();
    header("Location:".url('show.php?status=record-added'));
}
else{
    echo "Insert Error....";
}
?>