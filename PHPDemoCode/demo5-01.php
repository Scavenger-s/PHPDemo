<?php
//面向对象(封装 继承 多态)
//类（模板、自定义数据类型）  对象(变量)
class Person{//
//属性，静态
//姓名 性别 年龄
private $name;//只能在类中访问，类的外部是不能直接访问属性的
private $sex;
private $age;
//构造方法：在类实例化对象的时候，系统会自动调用类中的构造方法
function __construct($name='',$sex='男',$age=1){//初始化属性
	$this->name = $name;
	$this->sex = $sex;
	$this->age = $age;
}
//通过setter（给属性写值）和getter(读取属性的值)方法对属性的值进行封装
public function setSex($sex){//写
	if($sex=='男'||$sex=='女'){
	$this->sex = $sex;}
}
public function getSex(){//读
	return $this->sex;
}
public function setAge($age){
	if($age>150||$age<0) return;
	$this->age = $age;
}
public function getAge(){
	return $this->age;
}
//方法（函数），动态
//this关键字-->表示类中的属性
function say(){
	echo "我叫".$this->name.' 今年'.$this->age.'岁， 性别为'.$this->sex.'<br>';
}
function run(){
	echo "正在跑步。。。";
}
//析构函数：当对象消亡的时候，会自动的执行析构函数。
function __destruct(){
	echo "再见".$this->name.'<br>';
}
}
//实例化对象--->定义变量
// $per1 = new Person("张三",'男',20);
// $per1 = null;//对象的销毁
// $per2 = new Person('李四','女');
// $per3 = new Person('王五');
// $per1->say();
//$per2->say();
//$per3->say();
//给属性赋值
// $per1->name = '张三';
// $per1->sex = '男';
// $per1->age = 23;
// //读取属性的值
// // echo "per1的姓名为：".$per1->name.'<br>';
// $per1->say();
$per1 = new Person('王五');
$per1->setSex('女1111111');
$per1->say();
?>