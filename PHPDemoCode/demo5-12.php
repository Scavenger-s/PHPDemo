<?php
require "demo5-10.php";
	$per_string = file_get_contents("file.txt");
	//反序列化
	$per = unserialize($per_string);
	$per->say();

?>