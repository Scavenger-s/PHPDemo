<?php
$path = "C:\\AppServ\\www\\studyphp2\\demo9-01.php";
$path_parts=pathinfo($path);
echo $path_parts["dirname"];//该文件的目录
echo $path_parts["basename"];//文件名称
echo $path_parts["extension"];//扩展名

?>