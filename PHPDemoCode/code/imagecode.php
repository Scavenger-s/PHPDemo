<?php
	session_start();
	require_once("vcode.class.php");
	echo new Vcode();//1.构造方法 2.toString()
?>