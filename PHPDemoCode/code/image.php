<?php
	session_start();
	if(isset($_POST['submit'])){
		if(strtoupper(trim($_POST["code"]))==$_SESSION['code']){
			echo "验证码输入成功！<br>";
		}else{
			echo '<font color="red">验证码输入错误</font><br>';
		}
	}
?>
<html>
<head>
	<title> 验证码小程序</title>
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
	<script type="text/javascript">
		function newdcode(obj,url){
			obj.src = url+'?nowtime='+new Date().getTime();
		}
	</script>
</head>
<body>
	<img src="imagecode.php" alt="看不清楚,换一张" style="cursor: pointer;" onclick="javascript:newdcode(this,this.src)"/>
	<form method="POST" action="image.php">
		<input type="text" name="code" size="4">
		<input type="submit" name="submit" value="提交">
	</form>
</body>
</html>