<?php
include_once __DIR__.'/query-builder/query.php';
include_once __DIR__.'/function.php';
$id =get('id');
if(!empty($id)){
    $query = new Query();
    if($query->delete('emp')->where('id',$id)->commit()){
        header("Location:".url('show.php?status=record-deleted'));
    }else{
        exit('Cannot Deleted the records');
    }
}
?>