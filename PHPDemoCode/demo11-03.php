<?php
//查询数据库
try{
	$dbh= new PDO("mysql:dbname=bookstore2;host=localhost",'root','12345678');
	echo "数据库连接成功！";
}catch(Exception $e){
	echo "数据库连接失败".$e->getMessage();
}
$query = "SELECT price,detail,publisher FROM book";
try{
	//查询数据库的信
	$pdodata = $dbh->query($query);
	echo "book表中一共有".$pdodata->rowCount()."条记录信息。\n";
	foreach ($pdodata as $row) {
		echo $row['price']."\t";
		echo $row['detail']."\t";
		echo $row['publisher']."\n";
	}
}catch(Exception $e){
	echo $e->getMessage();
}

?>