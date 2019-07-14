<?php
//系统提供了几个全局变量的数组
//$_SERVER---->WEB服务器的信息
foreach ($_SERVER as $key => $value) {
	echo '$_SERVER['.$key.'] = '.$value.'<br>';
}
echo $_SERVER['HTTP_HOST'];
?>