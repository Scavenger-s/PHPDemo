<?php
class Person {
	private $name;
	private $sex;
	private $age;
	function __construct($name="",$sex="",$age=0){
		$this->name = $name;
		$this->sex = $sex;
		$this->age = $age;
	}
	function say(){
		echo "name = ".$this->name." sex = ".$this->sex." age=".$this->age;
	}
}
?>