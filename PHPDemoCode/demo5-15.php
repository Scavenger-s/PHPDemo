<?php
//接口--->特殊的类，接口比抽象类更抽象
//1.常量  2.抽象方法（函数）
interface One{
	//1.常量
	const CONSTANT = 3.14;
	//2.抽象方法
	function fun1();
	function fun2();
}
//接口必须通过类实现才能使用
class MyClass implements One{
	//当一个类要实现接口时，必须实现接口中所有的抽象方法
	function fun1(){
		echo "这是fun1函数";
	}
	function fun2(){
		echo "这是fun2函数";
	}
}
?>