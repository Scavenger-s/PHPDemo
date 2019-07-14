<?php
try{
	$dbh= new PDO("mysql:dbname=bookstore2;host=localhost",'root','12345678');
	echo "数据库连接成功！";
}catch(Exception $e){
	echo "数据库连接失败".$e->getMessage();
}
//事务处理
try{
	$price = 80;
	//开始事务处理
	$dbh->beginTransaction();
	//处理A用户，将钱转出
	$aff_rows = $dbh->exec("update account3 set cash=cash-{$price} where name='userA'");
	if($aff_rows>0){
		echo "userA成功转出{$price}元人民币<br>";
	}else{
		throw new Exception("userA转出失败！");
	}
	//处理B用户，将钱转入
	$aff_rows = $dbh->exec("update account3 set cash=cash+{$price} where name='userB'");
	if($aff_rows>0){
		echo "userB成功转入{$price}元人民币<br>";
	}else{
		throw new Exception("userB转入失败！");
	}
	$dbh->commit();//执行事务
}
catch(Exception $e){
	echo "交易失败：".$e->getMessage();
	//回滚操作,撤销操作
	$dbh->rollback();
}
?>