<?php
//final关键字---》最终的含义
class MyClass{
	//...............
	final function fun(){
		////.......
	}
}
class MyClass2  extends MyClass{
	//......
	function fun(){//函数的重载

	}
}
//如果一个类的前面存在final关键字，此类为终类，不能再被其它类继承
//如果父类的一个方法定义时存在final关键字，此方法就不能被覆写了（override）
?>