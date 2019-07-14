<?php
error_reporting(0);
$num = 0;//统计子目录和文件的个数
$dirname = "C:\\AppServ\\www\\15";//统计路径
//打开目录操作
$dir_handle=opendir($dirname);
	echo '<table align="center" width="600">';
	echo '<caption><h2>目录'.$dirname.'下面的内容</h2></caption>';
	echo '<tr align="center" bgcolor="#ccccc">';
	echo '<th>文件名</th><th>文件大小</th><th>文件类型</th><th>修改时间</th></tr>'; 
	while ($file=readdir($dir_handle)) {
		$dirFile = $dirname."/".$file;//得到文件的绝对路径
		$bgcolor = $num++%2==0? '#FFFFF':'#CCCCC';
		echo '<tr bgcolor ='.$bgcolor.'>';
		echo '<td>'.$file.'</td>';
		echo '<td>'.filesize($dirFile).'</td>';
		echo '<td>'.filetype($dirFile).'</td>';
		echo '<td>'.date('Y/n/t',filemtime($dirFile)).'</td>';
		echo '</tr>'; 
	}
	echo "</table>";
	//关闭文件操作的句柄
	closedir($dir_handle);
	echo "在<b>".$dirname."</b>目录的子目录下，共有文件：".$num."</b>个";
?>