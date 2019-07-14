<?php
//距离毕业有多少天
error_reporting(1);
//
$now = strtotime("now");//秒
$endTime = strtotime("2020-07-01 08:08:08");

$second = $endTime-$now;//总秒数
$year = floor($second/3600/24/365);//地板除法

$temp = $second-$year*3600*24*365;
$month = floor($temp/3600/24/30);

$temp = $temp-$month*3600*30*24;
$day = floor($temp/3600/24);

$temp = $temp-$day*3600*24;
$hour = floor($temp/3600);

$temp = $temp-$hour*3600;
$minute = floor($temp/60);

$second2 = $temp-$minute*60;

echo "距离毕业还有{$year}年，{$month}月，{$day}天，{$hour}时，{$minute}分，{$second2}秒。";
?>