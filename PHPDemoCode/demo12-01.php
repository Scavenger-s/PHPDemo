<?php
//会话控制
//1.为什么要使用会话控制？
//访问web页面的时候，会使用会话控制，当访问web页面时，要使用http协议，由于http协议是一种无状态的协议（当用户访问web页面时，http协议并不能维护两个事务之间的状态。），所以要使用会话控制技术来跟踪用户客户端的连续请求（会话控制）。
//2.会话控制有几种方式？
//（1）.cookie（小甜饼）:将用户信息保存到客户端(键值对)
//浏览器必须将cookie打开。
//（2）.session（会话）：将用户信息保存到服务器端
//1.使用cookie进行会话控制--setcookie()
// setcookie("username","lisi",time()+60*60*24*7);
// 2.使用cookie存放一组数据
setcookie("user[username]","lisi");
setcookie("user[password]",md5("12345678"));
setcookie("user[email]","lisi@qq.com");
//3.删除cookie
setcookie("username");
setcookie("username","",time()-1);




?>