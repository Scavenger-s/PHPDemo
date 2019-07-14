<?php
//对象的部分序列化
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
	//__sleep()；当对象序列化时，系统会自动的调用sleep()魔法函数
	function __sleep(){
		//对象的属性是通过数组的形式保存的
		$arr = array("name","age");
		return $arr;
	}
	//__wakeup():当对象反序列化的时候，系统会自动调用wakeup魔法函数
	function __wakeup(){
		$this->age = 12;
	}
}
$per2 = new Person("张三","女",34);
//对象的序列化---->将对象的信息保存到文件中
//1.数据库中   2.数据存储到文件中（*）
$per2_string= serialize($per2);
file_put_contents("file2.txt", $per2_string);
$per_string = file_get_contents("file2.txt");
	//反序列化
	$per = unserialize($per_string);
	$per->say();
?>