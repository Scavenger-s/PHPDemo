<?php
//对象的克隆clone
class Person{//
private $name;//只能在类中访问，类的外部是不能直接访问属性的
private $sex;
private $age;
function __construct($name='',$sex='男',$age=1){//初始化属性
	$this->name = $name;
	$this->sex = $sex;
	$this->age = $age;
}
//__clone()：当执行clone时，会自动调用类中的__clone()魔法方法
function __clone(){
	$this->name ="我是".$this->name."的副本";
	$this->age = 50;
}
function say(){
	echo "我叫".$this->name.' 今年'.$this->age.'岁， 性别为'.$this->sex.'<br>';}
function run(){
	echo "正在跑步。。。";}
}
$per1 = new Person("张三",'男',20);
$per1->say();
$per2 = clone $per1;
$per2->say();
?>