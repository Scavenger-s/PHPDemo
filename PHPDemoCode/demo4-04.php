<?php
//通过自定义的方式对数组的元素进行排序
//按照元素字母的个数进行由小到大排序
$array = array('PHP','Apache','Liunx','MySql');
//排序规则--->过滤器
//0---》相等
//1--->大于
//-1--->小于
function sortByLength($one,$two){
	if(strlen($one)==strlen($two)){
		return 0;
	}else{
		return (strlen($one)>strlen($two))? 1:-1;
	}
}
//usort
	usort($array,'sortByLength');
	print_r($array);

//数组的运算
//1.数组的交集---->相同的部分
$array2 = array('a','b','c','d');
$array3 = array('a','b','e','f');
print_r(array_intersect($array2, $array3));
//2.数组的差集---->不同的部分
print_r(array_diff($array2, $array3));
//3.数组元素求和
$array4 = array(0=>'9',1=>'19',2=>'29');
echo "和为：".array_sum($array4);
//
//

?>