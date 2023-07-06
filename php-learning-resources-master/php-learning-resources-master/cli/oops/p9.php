<?php
// WAP in PHP to show implementation of setters and getters.
class User{
public $name;
public $class;
public $rollno;
public $sub=[];

public function create($name, $class, $rollno, $sub){ // Setter
$this->name = $name;
$this->class = $class;
$this->rollno = $rollno;
$this->sub = $sub;
}

public function getName(){ // Getter
return $this->name;
}

public function getClass(){ // Getter
return $this->class;
}

public function getRollno(){ // Getter
return $this->rollno;
}

public function getSubject(){ // Getter
return $this->sub;
}

public function getInfo(){ // Method
echo "Name :  {$this->name} \n";
echo "Class :  {$this->class} \n";
echo "Roll No. :  {$this->rollno} \n";
echo "Subject :  ".implode(',', $this->getSubject())." \n";
}
}

$user = new User();
$user->create('Ram','12th', 100, ['PHP', 'HTML', 'Java']);
echo "User name from getter {$user->getName()} \n";
echo "User class from getter {$user->getClass()} \n";
echo "User roll no from getter {$user->getRollno()} \n";
echo "User subjects from getter ".implode(',',$user->getSubject())." \n";

$user->getInfo();
?>