<?php
	$array6 = array(
		'编号' => 1, 
		"姓名"=>"张三",
		"公司"=>"A公司",
		"地址"=>"北京市",
		"电话"=>"138000");
		//key()取出当前指针指向元素的key值
		//current()取出当前指针指向元素的value值
		echo "key = ".key($array6)." value = ".current($array6)."<br>";
		//next()向后移动一位指针
		next($array6);
		next($array6);
		echo "key = ".key($array6)." value = ".current($array6)."<br>";
		//end()将指针移动到数组的最后一位
		end($array6);
		echo "key = ".key($array6)." value = ".current($array6)."<br>";
		//prev()向前移动一位指针
		prev($array6);
		echo "key = ".key($array6)." value = ".current($array6)."<br>";
		//reset()将数组指针无条件的移动到数组第一个元素位置
		reset($array6);
		echo "key = ".key($array6)." value = ".current($array6)."<br>";


?>