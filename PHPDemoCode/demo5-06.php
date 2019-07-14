<?php
//static---》静态的含义
//如果一个类中的属性前面有static关键字，此属性为静态属性，
//所有对象都共享这一个变量。
class MyClass{
	static $count;//静态变量
	var $num=0;//变量
	const PI = 3.141592653;//常量
	function showConstant(){
		//常量在类的内部使用：self::变量的名称
		echo self::PI;
	}
	function __construct(){
		//静态变量在类的内部使用：self::$变量的名称
		self::$count++;
		$this->num++;
	}
	function getData(){
		return "count=".self::$count." num=".$this->num."<br>";
	}
	static function getCount(){//静态函数
		return "count=".self::$count;
	}
}
//类的外部使用静态变量：类名::$变量的名称
MyClass::$count=0;
$obj1 = new MyClass();//count=1 num =1;
echo $obj1->getData();
$obj2 = new MyClass();//count=2 num =1;
echo $obj2->getData();
$obj3 = new MyClass();//count=3 num = 1;
echo $obj3->getData();
//类的外部使用静态函数：类名::函数的名称
echo MyClass::getCount();
//类的外部使用常量：类名::常量的名称
echo "PI=".MyClass::PI;
?>