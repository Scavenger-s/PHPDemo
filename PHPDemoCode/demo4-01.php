<?php
//操作数组的函数
$array1 = array(
	'编号' =>1 ,
	"姓名"=>"张三",
	"公司"=>"A公司",
	"地址"=>"太原市" ,
	"Email" => "aaa@163.com");
//1.array_values()获得数组值的数组
print_r(array_values($array1));
//2.array_keys()获得数组键的数组
print_r(array_keys($array1));
//2.1
print_r(array_keys($array1,"张三"));
//2.2
$array2 = array(10,20,30,'10');
print_r(array_keys($array2,'10',false));//模糊匹配
print_r(array_keys($array2,'10',true));//精确匹配
//3.in_array()检查数组中是否存在某个值,返回布尔类型的值
$array3 = array('Mac','NT','Irix','Liunx');
if(in_array('Irix', $array3)) echo "got Irix";
if(in_array('mac',$array3)) echo "got mac";
$array4 = array('1.10',12.4,1.13);
if(in_array('12.4',$array4,false)) echo "got 12.4";
//4.array_key_exists()判断key是否存在
$array5 = array('first'=>1,'second'=>2);
if(array_key_exists('first', $array5))
	echo "键名first在数组中";
$array6 = array('first'=>null,'second'=>2);
echo array_key_exists('first',$array6)? 1:2;
echo isset($array6['first'])? 1:2;
//5.array_flip()交换数组的键和值
$array7 = array(
	'编号' =>1 ,
	"姓名"=>"张三",
	"公司"=>"A公司",
	"地址"=>"太原市" ,
	"Email" => "aaa@163.com");
print_r(array_flip($array7));
$array8 = array('a'=>1,'b'=>2,'c'=>2);
print_r(array_flip($array8));
//6.array_reverse()将数组进行翻转
print_r(array_reverse($array7));
//7.数组计数count
$array9 = array('Mac','NT','Irix','Liunx');
echo count($array9);
$array10 = array(
	'data1'=>array('Mac','NT','Irix','Liunx'),
	'data2'=>array('Mac','NT','Irix','Liunx')
);
echo count($array10);
echo count($array10,1);//添加参数，可以将元素内层的元素进行统计
//8.统计数组元素的个数array_count_values()
$array11 = array(1,'php',1,'mysql','php');
$newArray = array_count_values($array11);
print_r($newArray);
//9.去除数组中的重复元素(值)array_unique()
$array12=  array('a'=>'php','b'=>'mysql','c'=>'mysql');
print_r(array_unique($array12));

?>