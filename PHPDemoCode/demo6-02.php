<?php
	//trim()--->可以去掉字符串多余的空格
	$str1 = "   lamp   ";
	echo strlen($str1);
	//去掉左边的空格
	echo strlen(ltrim($str1));
	//去电右边的空格
	echo strlen(rtrim($str1));
	//去掉两边的空格
	echo strlen(trim($str1));
	//自定义去掉字符
	$str2 = "123 This is a test....";
	echo ltrim($str2,"0..9")."<br>";
	echo rtrim($str2,".")."<br>";
	echo trim($str2,"0..9 A..Z .")."<br>";
	//在字符串两边添加内容
	//默认---》空格,str_pad
	$str3 = "hello";
	echo str_pad($str3, 10)."<BR>";//在字符串的右边添加空格
	//左边添加
	echo str_pad($str3,10,"**",STR_PAD_LEFT);
	echo str_pad($str3,10,"#",STR_PAD_BOTH);

?>