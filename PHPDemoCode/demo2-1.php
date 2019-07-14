<?php
//自定义函数
define('PI', 3.1415);
function getCircleArea($raduis){
	$area = PI*$raduis*$raduis;
	return $area;
}
function sum($a,$b){
	return $a+$b;
}
$r = 9;
$s = getCircleArea($r);
echo "面积 = ".$s;
echo "<br>";
echo sum(10,20);
$var = 100;
function test(){
	global $var;
	echo "<br>var的值为：".$var;
}
test();



?>