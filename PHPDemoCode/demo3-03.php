<?php
	//通过foreach结构遍历数组
	$array1 = array(1,"张三","A公司","北京市","123@qq.com");
	//foreach可以依次从数组中取元素进行操作
	$num = 0;
	foreach ($array1 as $value) {
		echo "数组中的第".$num."个元素：".$value."-";
		$num++;
	}

	$array6 = array(
		'编号' => 1, 
		"姓名"=>"张三",
		"公司"=>"A公司");
	echo "<dl>联系人的信息";
	foreach ($array6 as $key => $value) {
		echo "<dd>".$key.":".$value."</dd>";
	}
	echo "</dl>";
?>