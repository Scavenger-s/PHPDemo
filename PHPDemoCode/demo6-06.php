<?php
//对HTML标签--》用户自定义处理
$str = "<font color='red' size =8>liunx</font> <i>apache</i> <u>mysql</u> <b>php</b>";
//1.把所有的标签都去掉
echo $str."<br>";
echo strip_tags($str)."<br>";
//2.去掉部分标签
echo strip_tags($str,"<font>")."<br>";
echo strip_tags($str,"<b><i><u>");

//对字符串进行反向输出
echo strrev("www.baidu.com")."<br>";

//对数据格式化
$number = 678958957;
echo number_format($number)."<br>";//默认以，隔开
echo number_format($number,3)."<br>";//保留3位小数
//自定义符合
echo number_format($number,3,",",".")."<br>";
//对字符串进行加密
$password="123456";
echo md5($password);
if(md5($password)=="e10adc3949ba59abbe56e057f20f883e"){
	echo "登录成功！";
}
//字符串比较
//（1）不区分大小写的比较
$strName = "Admin";
$strPass = "aaabcd";
if(strcasecmp($strName, "admin")==0){
	echo "不区分大小写的比较";
}
//区分大小写的比较----》字典顺序
switch(strcmp($strPass,"aaaBcd")){
	case 0:echo "两个字符串相等！";break;
	case 1:echo "第一个字符串大于第二个字符串！";break;
	case -1:echo "第一个字符串小于第二个字符串！";break; 
}







?>