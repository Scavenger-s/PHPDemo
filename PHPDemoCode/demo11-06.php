<?php
//两种获取数据的方式
try{
	$dbh= new PDO("mysql:dbname=bookstore2;host=localhost",'root','12345678');
	echo "数据库连接成功！";
}catch(Exception $e){
	echo "数据库连接失败".$e->getMessage();
}
echo '<table border="1" align="center" width=90%>';
echo '<caption><h1>图书信息表</h1></caption>';
echo '<tr bgcolor="#CCCCC">';
echo '<th>作者</th><th>书名</th><th>详情</th><th>价格</th><th>出版社</th></tr>';
$stmt = $dbh->query("SELECT * FROM book");
//从数据库一条一条取数据
while(list($author,$bookName,$detail,$price,$publisher)=$stmt->fetch(PDO::FETCH_NUM)){
	echo '<tr>';
	echo "<td>".$author."</td>";
	echo "<td>".$bookName."</td>";
	echo "<td>".$detail."</td>";
	echo "<td>".$price."</td>";
	echo "<td>".$publisher."</td>";
	echo "</tr>";
}
echo '</table>';
?>