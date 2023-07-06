<?php

#step1 : make connection
include __DIR__.'/dbconnect.php';

#step2 : prepare the Query


$sql = "drop table Deepak;";


#step3 : Execute the Query or Fire the Query
if(mysqli_query($conn,$sql)){

echo 'table is droped = '.mysqli_insert_id($conn);

}else{

echo 'Inserted Error'.mysqli_error($conn);
}

