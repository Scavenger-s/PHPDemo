<?php
//__call():当对象调用类中，没有定义的方法时，自动执行call魔法函数的内容
class TestClass{
	function __call($functionName,$args){
		echo "你所使用的函数".$functionName."(参数：";
		print_r($args);
		echo ")不存在。";
	}
}
$obj = new TestClass();
$obj->myFun("one",2,"three");
?>