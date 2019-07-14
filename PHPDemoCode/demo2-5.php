<?php
	function demo(&$arg){//参数的值传递
		$arg = 200;
	}
	$var = 100;
	//1.简单数据类型 2.引用数据类型（类类型）（对象，数组）
	demo($var);

	echo $var;
?>