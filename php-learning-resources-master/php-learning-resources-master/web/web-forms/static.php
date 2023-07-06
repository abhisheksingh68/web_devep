<?php
$data=array(
'name'=>'Deep',
'class'=>'BTech',
'rollno'=>'21',
);

echo <<<'FORM'
<h1 align="center">Student Form</h1>
</hr>
<form align="center">
<p>
	Name : <input type="text" value="{$data['name']}">
</p>
<p>
	Class : <input type="text" value="{$data['class']}">
</p>
<p>
	Roll No. : <input type="number" value="{$data['rollno']}">
</p>
</form>

FORM;