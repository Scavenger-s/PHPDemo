<?php
$array6 = array(
		'编号' => 1, 
		"姓名"=>"张三",
		"公司"=>"A公司");
		//通过each和list函数遍历数组
echo "<dl>联系人的信息";
	while (list($key,$value)=each($array6)) {
		echo "<dd>".$key.":".$value."</dd>";
	}
echo "</dl>";
?>