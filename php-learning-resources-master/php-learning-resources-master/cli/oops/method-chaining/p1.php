<?php
// Method chaining
class chain{
public function a(){
echo "Method a\n";
return $this;
}
public function b(){
echo "Method b\n";
return $this;
}
public function c(){
echo "Method c\n";
return $this;
}
}
$chain = new Chain();
$chain->a();
$chain->b();
$chain->c();
$chain->a()->b()->c();
?>