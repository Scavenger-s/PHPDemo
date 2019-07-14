<?php
//抽象类---》1.类的属性  2.普通方法  3.抽象方法（只定义，不实现）
	abstract class Person{
		protected $name;
		protected $country;
		function __construct($name="",$country){
			$this->name = $name;
			$this->country = $country;
		}
		abstract function say();
		abstract function eat();
		function run(){
			echo "使用两天腿走路";
		}
	}
	//抽象类不能实例化对象
	class Chinese extends Person{
		function say(){
			echo $this->name."是".$this->country."人，讲中文<br>";
		}
		//如果一个类继承了一个抽象类，在此类中，必须实现抽象类中所有的抽象方法
		function eat(){
			echo $this->name."使用筷子吃饭<br>";
		}
	}
	class Americans extends Person{
		function say(){
			echo $this->name."是".$this->country."人，讲英语<br>";	
		}
		function eat(){
			echo $this->name."使用刀和叉吃饭<br>"; 
		}
	}
$chinese = new Chinese("张三","中国");
$americans = new Americans("Lucy","美国");
$chinese->say();
$americans->say();
?>