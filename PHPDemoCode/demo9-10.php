<?php
//1.复制
if(copy("C:\\AppServ\\www\\studyphp2\\data.txt","C:\\AppServ\\www\\studyphp2\\data2.txt")){
	echo "文件复制成功！";
}
//2.删除文件
$filename = "C:\\AppServ\\www\\studyphp2\\data2.txt";
if(file_exists($filename)){
	if(unlink($filename)){
		echo "删除成功";
	}else{
		echo "删除失败";
	}
}else{
	echo "文件不存在！";
}
//3.对文件重命名
if(rename("C:\\AppServ\\www\\studyphp2\\data.txt","C:\\AppServ\\www\\studyphp2\\data.txt"))
{
	echo "文件重命名成功！";
}else{
	echo "文件重命名失败";
}
//4.文件截取
$fp = fopen("C:\\AppServ\\www\\studyphp2\\data.txt","r+") or die("文件打开失败！");
if(ftruncate($fp, 1024)){
	echo "文件截取成功";
}
?>