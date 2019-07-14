<?php
	//使用系统提供的回调函数
	function demo($msg1,$msg2){
		echo "msg1=".$msg1;
		echo "<br>";
		echo "msg2 = ".$msg2;
	}
	call_user_func_array('demo', array('你好','中国'));
?>