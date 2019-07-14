<?php
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
class Test{
	public $var;
	function __construct($value=0){
	switch ($value) {//1.处理用户自定义的异常 2.系统的异常
		case 1:
			throw new MyException("传入的值1无效！", 10);
			break;
		case 2:
			throw new Exception("传入值2无效！", 20);
			break;
		default://没有异常
			$this->var = $value;
			break;

	}
}
}
//1.没有错误的情况
try{
	$t1 = new Test();
}catch(MyException $e){
	echo "捕获自定义异常：".$e;
}catch(Exception $e){
	echo "捕获系统异常：".$e;
}
//2.抛出自定义异常的信息
try{
	$t1 = new Test(1);
}catch(MyException $e){
	echo "捕获自定义异常：".$e;
}catch(Exception $e){
	echo "捕获系统异常：".$e;
}
//3.抛出系统异常的信息
try{
	$t1 = new Test(2);
}catch(MyException $e){
	echo "捕获自定义异常：".$e;
}catch(Exception $e){
	echo "捕获系统异常：".$e;
}
?>