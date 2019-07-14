<?php
class MyClass{
	protected $var = 100;
	protected function fun(){
		echo "hello";
	}
}
class MyClass2 extends MyClass{
	function useProperty(){
		echo "var=".$this->var."<br>";
		$this->fun();
	}
}
$obj = new MyClass2();
$obj->useProperty();
?>