<?php
//数据库抽象层PDO
//php连接mysql数据库的代码
//MySQL ODBC Oracle SQLite
//数据库----PDO-----PHP（各种数据库的驱动程序）
$dsn = "mysql:dbname=bookstore;host=localhost";//mysql
// $dsn = "OCI:dbname = XXXXX;charset=UTF-8";//oracle
$user = 'root';
$password = '12345678';
$opt = array(PDO::ATTR_PERSISTENT=>true);//连接为长连接
try{
	$dbh= new PDO($dsn,$user,$password,$opt);
	echo "数据库连接成功！";
}catch(Exception $e){
	echo "数据库连接失败".$e->getMessage();
}
echo "\nPDO是否关闭自动提交功能：".$dbh->getAttribute(PDO::ATTR_AUTOCOMMIT);
echo "\n当前PDO的错误处理模式:".$dbh->getAttribute(PDO::ATTR_ERRMODE);
echo "\n数据表字段中字符的大小写转换:".$dbh->getAttribute(PDO::ATTR_CASE);
echo "\n连接状态相关信息：".$dbh->getAttribute(PDO::ATTR_CONNECTION_STATUS);
echo "\n将程序的空字符串转换为SQL终的null：".$dbh->getAttribute(PDO::ATTR_ORACLE_NULLS);
echo "\n数据库服务器特有的信息".$dbh->getAttribute(PDO::ATTR_SERVER_INFO);
echo "\n数据库服务器版本号信息".$dbh->getAttribute(PDO::ATTR_SERVER_VERSION);
echo "\n数据库客户端版本号信息：".$dbh->getAttribute(PDO::ATTR_CLIENT_VERSION);


?>