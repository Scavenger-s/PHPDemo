<?php
//通过php访问数据库
//增 删 改 查（效率低） 存储过程（提高数据访问的效率）
//php访问不同的数据库 连接mysql数据库
//localhost--服务器地址(数据库的IP地址)
$link = mysql_connect('localhost','root','12345678');
if(!$link){
	die('连接失败：'.mysql_error());
}
echo "连接成功！";
//数据库的连接池
echo mysql_get_client_info()."<br>";//数据库客户端API函数库的版本信息
echo mysql_get_host_info()."<br>";//与mysql服务器的连接类型(TCP/IP UDP)
//TCP/IP--->可靠的网络协议(复杂),经过3次握手信号,费时 
//UDP---->不可靠的网络协议(简单),被动链接，实时处理（视频传输）
echo mysql_get_proto_info()."<br>";//通讯协议的版本信息
echo mysql_get_server_info()."<br>";//数据库服务器的版本信息
echo mysql_client_encoding()."<br>";//使用的编码集
echo mysql_stat();//当前数据库连接状态
mysql_close($link);
//SQL(结构化的查询语言)
//非结构化查询语言NOSQL
//范式（1 2 3 4）--->满足第三范式



?>