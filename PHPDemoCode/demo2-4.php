<?php
	//静态变量
	function demo(){
		static $a = 0;//共享
		echo "a= ".$a."<br>";
		$a++;
	}
	demo();
	demo();
	demo();
?>