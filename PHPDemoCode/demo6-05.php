<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$str = "<b>webserver:</b> 'liunx'&'apache'";
	echo $str."<br>";
	//1.会将标签转化为字符，2.只转化双引号，保留单引号
	echo htmlspecialchars($str,ENT_COMPAT)."<br>";
	//1.会将标签转化为字符，2.双引号和单引号都转换
	echo htmlspecialchars($str,ENT_QUOTES)."<br>";
	//1.会将标签转化为字符，2.双引号和单引号都不转换
	echo htmlspecialchars($str,ENT_NOQUOTES)."<br>";
	$str2="<i>hello</i> hi";
	echo htmlentities($str2);
	?>
</body>
</html>