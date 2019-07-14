<?php
//读取网络文件
$file = fopen("http://www.baidu.com","r") or die("打开远程文件失败");
while(!feof($file)){
	$line = fgets($file,1024);
	//找title标签的内容
	if(preg_match("/<title>(.*)<\/title>/", $line,$out)){
		$title = $out[1];
		break;
	}
}
fclose($file);
echo $title;
?>