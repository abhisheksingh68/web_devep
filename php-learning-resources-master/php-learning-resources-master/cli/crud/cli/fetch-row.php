<?php
$result_set=mysqli_query($conn,$sql);
if(mysqli_num_rows($result_set)>0){
	$data=[];
	while($row = mysqli_fetch_row($result_set){//we can use index to get the table
		
		$data[]= $row;
		
	}
}else if (mysqli_num_rows($result_set)){
	echo "No record found";
}
else{
	echo "errror ".mysqli_error($conn);
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