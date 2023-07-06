<?php

include_once __DIR__.'/connection/dbconnect.php';

$id = $_GET['id'];

$sql = "DELETE FROM register WHERE id = {$id};";

if(mysqli_query($conn, $sql) or die("Query unsuccessful...")){
    header("Location: read.php");
}else{
    echo "Can't be deleted...".mysqli_error($conn);
}
