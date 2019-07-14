<?php
//数组的遍历
$array9 = array(
		array(1,"张三","A公司","北京市","138000","123@qq.com"),
		array(2,"李四","B公司","天津市","138000","123@qq.com"),
		array(3,"王五","C公司","上海市","138000","123@qq.com")	
);
echo '<table width = 600 align = "center">';
echo "<caption>联系人列表</caption>";
echo '<tr bgcolor = "#ddddd">';
echo "<th>编号</th><th>姓名</th><th>公司</th><th>地址</th><th>电话</th><th>EMAIL</th>";
echo "</tr>";
//遍历数组
for($row = 0;$row<count($array9);$row++){//行
	echo "<tr>";
	for($col =0;$col<count($array9[$row]);$col++){
		echo "<td>".$array9[$row][$col]."</td>";
	}echo "</tr>";
}
echo "</table>";
?>