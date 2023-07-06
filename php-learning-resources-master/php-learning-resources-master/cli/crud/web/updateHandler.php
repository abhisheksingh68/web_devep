<?php 
require_once __DIR__.'/function.php';
include_once __DIR__.'/query-builder/query.php';
$name = post('name');
$email = post('email');
$id = post('id');

$query = new Query();
if($query->update('emp',[
    "name"=> $name,
    "email"=>$email,
])->where('id',$id)->commit()){
    header("Location:".url('Show.php?status= record updated'));
}else{
    echo "update error";
}

?>
