<?php

require_once __DIR__.'/DB.php';
//rhis is query connection file

class Query extends DB{
	public $sql;
	
	public function insert($tablename,$formdata=[]){
		$columns = implode(",",array_keys($formdata));
		$values = implode("','",array_values($formdata));
		
		$SQL = "INSERT INTO {$tablename}($columns) values('$values');";
		$this->sql = $SQL;
		return $this;
		}
		public function getQuery(){
			return $this->sql;
		}
		public function form($columns='*'){
		 $sql = "SELECT $columns FROM ";
         $this->sql =$sql;
   return $this;		 
		}
		public function table($tablename){
			$this->sql = $this->sql."$tablename";
			return $this;
		}
		
}

$query = new Query();
echo $query->insert('emp',[
      
      'name'=>'deepak',
	  'email'=>'dkmaury02@gmail.com',
	  'password'=>1234,
	  'mobile'=>'7309500280',
	  'dob'=>'18 may 2000'
	  
])->getQuery();
echo PHP_EOL;
echo $query->form('name,class,email',)->table('emp')->getQuery();
echo PHP_EOL;
echo $query->form()->table('emp')->getQuery();
echo PHP_EOL;
echo $query->form('name as n,class as c,email as e,count(*) as cnt,distict')->table('emp')->getQuery();

?>