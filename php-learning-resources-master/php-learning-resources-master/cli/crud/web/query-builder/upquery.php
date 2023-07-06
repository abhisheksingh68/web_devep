<?php
require_once __DIR__.'/DB.php';
//rhis is query connection file

class Query extends DB{
	public $sql;
	
	public function update($tablename,$formdata=[]){
		$columns = implode(",",array_keys($formdata));
		$values = implode("','",array_values($formdata));
		
		$SQL = "update {$tablename} set('name') values('$values');";
		$this->sql = $SQL;
		return $this;
		}
		public function getQuery(){
			return $this->sql;
		}
}
$query = new Query();
echo $query->update('emp',[
      
      'name'=>'deepak',
	  'email'=>'dkmaury02@gmail.com'
	 
	  
])->getQuery();





?>