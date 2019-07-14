<?php
//第一种方法：读取文件
$filename = "C:\\AppServ\\www\\studyphp2\\11.txt";
$handle = fopen($filename, "r") or die("文件打开失败！");
$content = fread($handle,100);
fclose($handle);
echo $content;
//第二种方法：读取文件，每个文件都是以EOF
$filename = "C:\\AppServ\\www\\studyphp2\\11.txt";
$handle = fopen($filename, "r") or die("文件打开失败！");
$content = "";
while (!feof($handle)) {
	$content .= fread($handle,1024); 
}
fclose($handle);
echo $content;
//第三种读文件的方法
$filename = "C:\\AppServ\\www\\studyphp2\\11.txt";
$handle = fopen($filename, "r") or die("文件打开失败！");
$content = fread($handle,filesize($filename));
fclose($handle);
echo $content;
//第四种读文件
echo file_get_contents($filename);
//第五种读文件的方法
print_r(file($filename));
?>