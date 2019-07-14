<?php
//封装 继承 多态
//c++、python-->多继承  php、java、c#--->只能单继承
class Person{//
var $name;//只能在类中访问，类的外部是不能直接访问属性的
var $sex;
var $age;
function __construct($name='',$sex='男',$age=1){//初始化属性
	$this->name = $name;
	$this->sex = $sex;
	$this->age = $age;
}
function say(){
	echo "我叫".$this->name.' 今年'.$this->age.'岁， 性别为'.$this->sex.'<br>';}
function run(){
	echo "正在跑步。。。";}
}
//Student
class Student extends Person{
	var $school;
	function study(){
		echo $this->name."正在".$this->school."学习";
	}	
}
class Teacher extends Student{
	var $wage;
	function __construct($name,$sex,$age,$school,$wage){
		//调用父类中的构造函数在子类中使用
		parent::__construct($name,$sex,$age);
		$this->school = $school;
		$this->wage = $wage;
	}
	function teaching(){
		echo $this->name."在".$this->school."教书， 工资为:".$this->wage;
	}
}
$teacher1 = new Teacher("张三","女",30);
$teacher1->school = "山西传媒学院";
$teacher1->wage = 3000;
$teacher1->say();
$teacher1->study();
$teacher1->teaching();
$teacher2 = new Teacher("李四","男",31,"山西大学",3500);
$teacher2->say();
?>