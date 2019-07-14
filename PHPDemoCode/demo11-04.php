<?php
//预处理语句
//1.提高执行的效率
//2.防止SQL注入
try{
	$dbh= new PDO("mysql:dbname=bookstore2;host=localhost",'root','12345678');
	echo "数据库连接成功！";
}catch(Exception $e){
	echo "数据库连接失败".$e->getMessage();
}
//1.准备一个预编译的SQL语句
$query = "INSERT INTO book(author,bookName,detail,price,publisher) VALUES(:author,:bookName,:detail,:price,:publisher)";
//2.对SQL语句进行预编译
$stmt = $dbh->prepare($query);
//3.准备数据
$author = "李强";
$bookName ="计算机基础";
$detail = "介绍计算机基础的书籍";
$price = 20;
$publisher = "人民邮电出版社";
//4.将准备好的数据与SQL语句进行绑定
$stmt->bindParam(':author',$author);
$stmt->bindParam(':bookName',$bookName);
$stmt->bindParam(':detail',$detail);
$stmt->bindParam(':price',$price);
$stmt->bindParam(':publisher',$publisher);
//5.执行SQL语句
$stmt->execute();
?>