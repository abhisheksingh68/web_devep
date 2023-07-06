<?php
// WAP in PHP to show object using class.
class Student{
private $name=’Deeproshan’;
private $class=’BTech’;
private $rollno=’1001’;
}
$std= new Student();
var_dump($std); // User-defined ---> Type(Resource)
?>
