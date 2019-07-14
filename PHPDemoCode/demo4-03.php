<?php
//数组排序的函数
//1.sort()将数组进行由小到大的顺序进行排序
$array = array(4,7,1,2,8);
sort($array);
print_r($array);
//2.rsort()将数组进行由大到小的顺序进行排序
rsort($array);
print_r($array);
//3.ksort将数组的键进行由小到大的顺序进行排序
$array2 =array(5=>'five',6=>'b',1=>'hello',10=>'ten');
ksort($array2);
print_r($array2);
//4.krsort将数组的键进行由大到小的顺序进行排序
krsort($array2);
print_r($array2);
//5.asort()对数组的值进行由小到大的顺序排序
$array3 = array(1=>'PHP',2=>'Apache',3=>'Liunx',4=>'MySql');
asort($array3);
print_r($array3);
//6.arsort()对数组的值进行由大到小的顺序排序
arsort($array3);
print_r($array3);
?>