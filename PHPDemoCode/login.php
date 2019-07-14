<?php
function clearCookies(){
	//清空cookie 清空对应字符串的内容 清空标志
	setcookie("username","",time()-3600);
	setcookie("isLogin","",time()-3600);
}
//判断用户是否执行登录操作
if($_GET["action"]=="login"){
	//登录前要清空cookie信息
	clearCookies();
	if($_POST["username"]=="admin" && $_POST["password"]=="admin"){
		setcookie('username',$_POST["username"],time()+60*60*24*7);
		setcookie('isLogin',1,time()+60*60*24*7);
		//向登录成功页面进行跳转
		header("Location:index.php");
	}else{
		die("用户名或者密码错误！");
	}
}else if($_GET["action"]=="logout"){
	clearCookies();
}
?>

<html>
<head>
	<title>用户登录</title>
</head>
<body>
	<h2>用户登录</h2>
	<form action="login.php?action=login" method="post">
		 用户名<input type="text" name="username"/><br>
		 密码<input type="password" name="password"/><br>
		 <input type="submit" name="" value="登录">
	</form>
</body>
</html>