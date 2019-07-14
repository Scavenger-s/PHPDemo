<?php
	//php 中对于false的情况
	$a = 0;
	if($a ==false){
		echo "变量a转化为布尔类型的false";
	} 
	$b = 0.0;
	if($b == false) echo "<br>变量b转化为布尔类型的false";
	$c = '';
	if($c ==false) echo "<br>变量c转化为布尔类型的false";
	$d = "0";
	if($d ==false)echo "<br>变量d转化为布尔类型的false";
	$e ==array();
	if($e ==false)echo "<br>变量e转化为布尔类型的false";
	$f ==NULL;
	if($f ==false)echo "<br>变量f转化为布尔类型的false";
	//表示true
	$var1 = 23;
	if($var1 ==true)echo "<br>变量var1转化为布尔类型的T";
	$var2 = "abc";
	if($var2 ==true)echo "<br>变量var2转化为布尔类型的T";
?>