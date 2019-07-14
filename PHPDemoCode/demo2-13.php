<?php
//类中普通函数和静态函数的回调
class Demo{
	static function fun($msg1,$msg2){//静态函数
		echo "msg1=".$msg1;
		echo "<br>";
		echo "msg2 = ".$msg2;
	}
}
class Demo2{
	function fun($msg1,$msg2){//普通函数
		echo "msg1=".$msg1;
		echo "<br>";
		echo "msg2 = ".$msg2;
	}
}
call_user_func_array(array('Demo','fun'),array('你好','中国'));
call_user_func_array(array(new Demo2(),'fun'),array('你好','中国'))
?>