<?php
$link = mysql_connect('localhost','root','12345678');
if(!$link){
	die("连接失败：".mysql_error());
}
//连接指定的数据库
mysql_select_db(' bookstore3',$link) or die("不能连接到指定数据库：".mysql_error());
//1.添加数据
// $insert = "INSERT INTO book(author,bookName,detail,price,publisher)VALUES ('张三','PHP','与PHP相关的书籍','34.1','清华大学'),
// 		   ('李四','JSP','与JSP相关的书籍','31.1','电子工业'),
// 		   ('王五','ASP','与ASP相关的书籍','14.1','人民邮电')";
// //执行sql语句
// $result = mysql_query($insert);
// if($result && mysql_affected_rows()>0){//返回对数据库的操作影响了多少行
// 	echo "插入数据成功,最后一条插入记录的id值：".mysql_insert_id();
// }else{
// 	echo "数据插入失败,错误代码为：".mysql_errno()."错误原因为：".mysql_error();
// }
//2.修改
// $update = "UPDATE book SET price = '25.7' WHERE bookName='PHP'";
// $result1 = mysql_query($update);
// if($result1){//返回对数据库的操作影响了多少行
// 	echo "修改数据成功";
// }else{
// 	echo "数据修改失败,错误代码为：".mysql_errno()."错误原因为：".mysql_error();
// }
//3.删除
$result2 = mysql_query("DELETE FROM book WHERE bookName='PHP'");
if($result2 && mysql_affected_rows()>0){
	echo "数据删除成功！";
}else{
	echo "数据删除失败，错误号为：".mysql_errno()." 错误原因为".mysql_error();
}








	

?>