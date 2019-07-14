<?php
//2.通过session进行会话控制
//由于用户可以自己关闭cookie方式，所以为了保证程序正常的使用会话控制，通常使用session方式（将用户信息保存到服务器中）
//1.启动session，对session进行初始化操作
session_start();
//2.将信息存储到session中
//使用session的全局数组来保存信息
$_SESSION["username"] = 'zhangsan';
$_SESSION["uid"] = 12;
?>