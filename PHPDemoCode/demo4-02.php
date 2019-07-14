<?php
//通过回调函数 在过滤数组的值
$array = array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
//$array = array('a'=>'data','b'=>'data','c'=>'data','d'=>'data','e'=>'data');
//将此数组中的偶数取出来
function fun($var){
	if($var%2 == 0){
		return true;
	}
}
print_r(array_filter($array,'fun'));
function fun2($value,$key){
	echo "The key ".$key." has the value ".$value.'<br>';
}
print_r(array_walk($array, 'fun2'));
function fun3($value,$key,$p){
	echo $key.' '.$p.' '.$value.'<br>';
}
print_r(array_walk($array,'fun3','has the value'));
function fun4(&$value,$key){
	$value = 'data';
}
array_walk($array,'fun4');
print_r($array);
//////////////////////array_map同时操作2个数组
$array2 = array('a','b','c','d');
$array3 = array('a','b','e','f');
function fun5($value1,$value2){
	if($value1==$value2){
		return 'same';
	}else{
		return 'different';
	}
}
print_r(array_map("fun5",$array2,$array3));
//通过array_map来合并数组
print_r(array_map(null,$array2,$array3));
?>