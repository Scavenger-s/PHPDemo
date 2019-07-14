<?php
//将会话信息保存到数据库中
class DBSession{
	//1.定义相关属性
	protected static $pdo = null;//表示PDO类的对象
	protected static $ua = null;//用户浏览器的信息
	protected static $ip = null;//客户端的ip地址
	protected static $lifetime = null;//Session的生成周期
	protected static $time = null;//当前操作的时间
	//2.对属性的值进行初始
	public static function start(PDO $pdo){
		//初始化pdo
		self::$pdo = $pdo;
		//初始化浏览器信息
		self::$ua = isset($_SERVER['HTTP_USER_AGENT'])? $_SERVER['HTTP_USER_AGENT']:'';
		//初始化ip地址
		self::$ip = !empty($_SERVER['HTTP_CLIENT_IP'])? $_SERVER['HTTP_USER_AGENT']:'unknown';
		//判断ip地址是否合法
		filter_var(self::$ip,FILTER_VALIDATE_IP)=== false && self::$ip ='unknown';
		//设置session的生命周期，直接从php.ini配置文件中获取
		self::$lifetime=ini_get('session.gc_maxlifetime');
		//初始化当前时间
		self::$time = time();
		//使用php中提供的自定义session函数来完成信息的数据库存储。 回调函数（每一个参数，都是一个函数）
		session_set_save_handler(
			array(__CLASS__,'open'),//自动的将php.ini信息-->程序 
			array(__CLASS__,'close'),//关闭 
			array(__CLASS__,'read'),//读取session信息 
			array(__CLASS__,'write'),//写入session信息 
			array(__CLASS__,'destroy'),//销毁session信息 
			array(__CLASS__,'gc')//垃圾回收
		);
		session_start();
	}
	public static function open($path,$name){
			return true;
	}
	public static function close(){
		return true;
	}
	public static function read($sid){
		$sql = 'SELECT * FROM session WHERE sid=?';
		$sth = self::$pdo->prepare($sql);
		$sth->execute(array($sid));
		if(!$result = $sth->fetch(PDO::FETCH_ASSOC)){
			return '';
		}
		return $result['data'];
	}
	public static function write($sid,$data){
		$sql = 'SELECT * FROM session WHERE sid=?';
		$sth = self::$pdo->prepare($sql);
		$sth->execute(array($sid));
		if($result=$sth->fetch(PDO::FETCH_ASSOC)){//用户信息已经存在，更新信息
		if($result['data']!=$data || self::$time>($result['update_time']+30)){
$sql ="UPDATE session SET update_time=?,data=? WHERE sid=?";
		$sth = self::$pdo->prepare($sql);
		$sth->execute(array(self::$time,$data,$sid));
		}

		}else{//用户信息不存在
			if(!empty($data)){
$sql = 'INSERT INTO session(sid,update_time,client_ip,
user_agent,data) VALUES(?,?,?,?,?)';
$sth = self::$pdo->prepare($sql);
		$sth->execute(array($sid,self::$time,self::$ip
			,self::$ua,$data));
			}

		}
		return true;
	}
	public static function destroy($sid){
		$sql = "DELETE FROM session WHERE sid=?";
		$sth = self::$pdo->prepare($sql);
		$sth->execute(array($sid));
		return true;
	}
	public static function gc($lifetime){
		$sql="DELETE FROM session WHERE update_time<?";
		$sth = self::$pdo->prepare(sql);
		$sth->execute(array(self::$time-$lifetime));
		return true;	
	}
}
?>