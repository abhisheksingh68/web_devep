<?php

#step1 : make connection
include __DIR__.'/dbconnect.php';

#step2 : prepare the Query


$sql = "create table Deepak_Kumar(
emp_id int(10) primary key,
name varchar(100),
email varchar(100),
age varchar(10)


);";


#step3 : Execute the Query or Fire the Query
if(mysqli_query($conn,$sql)){

echo 'table is created = '.mysqli_insert_id($conn);

}else{

echo 'Inserted Error'.mysqli_error($conn);
}

