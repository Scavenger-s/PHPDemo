<?php
//1.截取字符串
//sunstr()
echo substr("1234567", 2,5);
echo substr(1234567,2,5);
echo aaa;
//2.取单个字符
$str1 = "header";
echo $str1[4];
echo $str1{4}.$str1{5};
echo $str1{strlen($str1)-1};
$str1{strlen($str1)-1} = "quiuoio";
echo $str1{strlen($str1)-1};;
//3.echo 的格式
$str2 = "what is the lamp?";
echo $str2;
echo "this 
	  text
	  spans
	  multiply
	  lines  ";
echo "this ","string ","was ","made ","with multiply parameters";
//4.printf()
$str3 = "LAMP";
$number = 90;
printf("%s book,page number %d",$str3,$number);
printf("%0.3f",$number);
$fomat = "the %2\$s book contains %1\$d pages.
          that is a nice %2\$s full of %1\$d pages";
printf($fomat,$number,$str3);
//5.sprintf()---返回值
$number2 = 12;
$a = sprintf("%0.2f",$number2);
echo $a;

?>