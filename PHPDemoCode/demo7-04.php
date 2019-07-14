<?php
//扩展系统的Exception类
class MyException extends Exception{
	public function __construct($message,$code=0){
		parent::__construct($message,$code);
	}
	//覆写toString
	public function __toString(){
		return __CLASS__.":[".$this->code."]:".$this->message."<br>";
	}
	public function func(){
		echo "按照自定义的方法处理异常";
	}
}
try{
	$error = "发生异常！";
	throw new MyException($error);
}catch(MyException $e){
	echo $e."<br>";
	echo $e->func();
}


?>