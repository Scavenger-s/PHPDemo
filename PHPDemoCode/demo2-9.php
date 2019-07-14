<?php
//变量函数
function one($a,$b){
	return $a+$b;
}
function two($a,$b){
	return $a*$a+$b*$b;
}
function three($a,$b){
	return $a*$a*$a+$b*$b*$b;
}//泰勒展开式
$result = "three";
echo "运算结果为：".$result(10,20);
?>