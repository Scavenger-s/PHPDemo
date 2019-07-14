<?php
//时间的操作---php(32为数字)---》秒计算时间
//1970年1月1日0时0分0秒到设定时间的秒数
//2038年12月
error_reporting(0);
echo date("Y-m-d",mktime(0,0,0,2,1,2019))."<br>";
echo date("Y:m:d",mktime(0,0,0,12,36,2018))."<br>";
echo date("Y年m月d日",mktime(0,0,0,15,1,2008))."<br>";
echo date("Y-m-d",mktime(0,0,0,1,1,99))."<br>";
//通过英语的自然语言设定时间
echo date("Y-m-d",strtotime("now"))."<br>";
echo date("Y-m-d",strtotime("last monday"))."<br>";
//日---》星期的开始 0，一---->1,二---->2
echo date("Y-m-d",strtotime("+1 day"))."<br>";
echo date("Y-m-d",strtotime("8 may 2019"));




?>