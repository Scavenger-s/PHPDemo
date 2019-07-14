<?php
	$a = NULL;//空类型
	echo "检查变量a是否为空类型：".is_null($a);
	$b = 'test';
	echo "<br>检查变量b是否为字符串：".is_string($b);
	$c = 23;
	echo "<br>检查变量c是否为整型：".is_int($c);
	$d = 23.5;
	echo "<br>检查变量d是否为浮点型：".is_float($d);
	$e = "110.1";//数字字符串 数字
	echo "<br>检查变量e是否为数字：".is_numeric($e);
	$f = true;
	echo "<br>检查变量f是否为布尔类型".is_bool($f);


?>