<?php
//文件操作
error_reporting(0);
function getFilePro($filename){
	//1.文件是否存在
	if(!file_exists($filename)){
		echo "目标文件不存在！";
		return;
	}
	//2.判断是否是一个文件
	if(is_file($filename)){
		echo $filename."是一个文件！";
	}
	//3.判断是否是一个目录
	if(is_dir($filename)){
		echo $filename."是一个目录！";
	}
	//4.文件的形态
	echo "文件的形态：".getFileType($filename)."<br>";###
	//5.文件的大小
	echo "文件的大小：".getFileSize(filesize($filename))."<br>";
	//6.文件的可读性
	if(is_readable($filename))
		echo "文件可读！<br>";
	if(is_writable($filename))
		echo "文件可写！<br>";
	if(is_executable($filename))
		echo "文件可执行！<br>";
	//7.文件的有关时间
	echo "文件建立时间：".date("Y年m月j日",filectime($filename))."<br>";
	echo "文件更新时间：".date("Y年m月j日",filemtime($filename))."<br>";
	echo "文件最后打开时间：".date("Y年m月j日",fileatime($filename));
}
//文件形态的函数
function getFileType($filename){
	switch (filetype($filename)) {
		case 'file':$type.="普通文件";break;
		case 'dir':$type.="目录文件";break;
		case 'block':$type.="块设备文件";break;
		case 'char':$type.="字符设备文件";break;
		case 'fifo':$type.="管道文件";break;
		case 'link':$type.="符号链接文件";break;
		case 'unknown':$type.="未知文件";break;
		default:$type.="没有检测到的类型";break;
	}
	return $type;
}
function getFileSize($byte){//字节（Byte）
	if($byte>=pow(2,40)){
		$return = round($byte/pow(2,40),2);
		$suffix = 'TB';
	}elseif ($byte>=pow(2,30)) {
		$return = round($byte/pow(2,30),2);
		$suffix = 'GB';
	}elseif ($byte>=pow(2,20)) {
		$return = round($byte/pow(2,20),2);
		$suffix = 'MB';
	}elseif ($byte>=round(2,10)) {
		$return = round($byte/pow(2,10),2);
		$suffix = 'KB';
	}else{
		$return = $byte;
		$suffix = 'Byte';
	}
	return $return.' '.$suffix;
}
getFilePro('demo8-03.php');
?>