<?php
$result_set=mysqli_query($conn,$sql);
if(mysqli_num_rows($result_set)>0){
	$data=[];
	while($row = mysqli_fetch_object($result_set){//
		
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
		          ->addColumn($row['id'])  
		          ->addColumn($row['name'])
		          ->addColumn($row['email']);
			$i++;
}


$table->display();




?>