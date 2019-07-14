<?php
	//1.通过直接访问数组的形式使用数组
	$array1[0] = 1;
	$array1[1] = "张三";
	$array1[2] = "A公司";
	//同一个数组可以放任何类型的数据
	echo "编号：".$array1[0];
	echo "姓名：".$array1[1];
	echo "公司:".$array1[2];
	//2.自定义元素下标的形式给数组赋值
	$array2["编号"] = 2;
	$array2["姓名"] = "李四";
	$array2["公司"] = "B公司";
	echo "编号：".$array2["编号"];
	echo "姓名：".$array2["姓名"];
	echo "公司:".$array2["公司"];
	//3.混合形式
	$array3[0]  =1;
	$array3["姓名"] = "王五";
	$array3[1] = "C公司";
	$array3["Email"] = "123@qq.com";
	//4.省略下标
	$array4[] = 1;   //0
	$array4[] = "张三";//1
	$array4[] = "D公司";//2
	//如果数组没有下标，系统会给数组下标从0开始进行赋值
	print_r($array4);
	//5.
	$array5[] = 1;//0
	$array5[14] = "张三";//14
	$array5[] = "A公司";//15
	$array5[] = "123@qq.com";//16
	$array5[14] = "13800000";//修改14号元素的值
	print_r($array5);
	//6.通过集合（set）的方式定义数组
	$array6 = array(
		'编号' => 1, 
		"姓名"=>"张三",
		"公司"=>"A公司");//键key --->值value（键值对）
	print_r($array6);
	//与下面数组等价
	$array7["编号"] = 1;
	$array7["姓名"] = "张三";
	$array7["公司"] = "A公司";
	print_r($array7);
	//二维数组
	$array8 = array(
		array(1,"张三","A公司","北京市","123@qq.com"),
		array(2,"李四","B公司","天津市","123@qq.com"),
		array(3,"王五","C公司","上海市","123@qq.com"),	
);
	print_r($array8);
	echo $array8[0][3];
	//自定义下标的二维数组
	$array9 = array(
		"北京联系人"=>array(1,"张三","A公司","北京市","123@qq.com"),
		"天津联系人"=>array(2,"李四","B公司","天津市","123@qq.com"),
		"上海联系人"=>array(3,"王五","C公司","上海市","123@qq.com")	
);
	print_r($array9);
	echo $array9["北京联系人"][3];
?>