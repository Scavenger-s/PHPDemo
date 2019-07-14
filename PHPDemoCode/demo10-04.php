<?php
//查询
$link = mysql_connect('localhost','root','12345678');
if(!$link){
	die("连接失败：".mysql_error());
}
//连接指定的数据库
mysql_select_db(' bookstore3',$link) or die("不能连接到指定数据库：".mysql_error());
$result = mysql_query("SELECT * FROM book");
echo '<table align = "center" width = "80%" border="1">';
echo '<caption><h1>图书信息列表</h1></caption>';
echo '<th>作者</th><th>书名</th><th>介绍</th><th>价格</th><th>出版社</th>';
while ( $row = mysql_fetch_row($result)) {
	echo "<tr>";
		foreach ($row as $data) {
			echo "<td>".$data."</td>";
		}
	echo "</tr>";
}
echo "</table>";
mysql_free_result($result);//释放查询结果集的资源
mysql_close($link);
?>