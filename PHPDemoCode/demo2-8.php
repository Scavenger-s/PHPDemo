<?php
	//可变参数的函数  传递多个参数的值
	function more_args(){
		//系统提供的一个函数来接收多个参数的值
		$args=func_get_args();//返回是一个array
		for($i = 0;$i<count($args);$i++){
			echo "第".$i."个参数是：".$args[$i]."<br>";
		}
	}
	more_args("one","two","three",1,2,3);
	more_args(4,5,6);
?>