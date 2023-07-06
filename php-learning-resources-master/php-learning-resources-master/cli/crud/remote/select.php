<?php
// step1 : make connection
include __DIR__.'/dbconnect.php';
require __DIR__.'/vendor/autoload.php';
$table = new LucidFrame\Console\ConsoleTable();
$table
     ->addHeader('Sr No')
	 ->addHeader('Id')
	 ->addHeader('Name')
	 ->addHeader('Email');

#step2: prepare the query

$sql= "select * from emp";
#step : execute or fire the query
$result_set = mysqli_query($conn,$sql);

if(mysqli_num_rows($result_set)>0){
	
	$data=[];
	while($row=mysqli_fetch_assoc($result_set)){
		$data[] = $row;

	}
	
	
}
else if(mysqli_num_rows($result_set)==0){
	
	echo'no record found';
}
else{
	echo "inserted error".mysqli_error($conn);
}
$i=1;
foreach($data as $row){
					 $table->addRow()
		          ->addColumn($i)
		          ->addColumn($record['id'])
		          ->addColumn($record['name'])
		          ->addColumn($record['email']);
		$i++;
	
}
$table->display();


?>