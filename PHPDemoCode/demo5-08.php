<?php
	class MyClass{
		private $foo;
		public function __construct($foo){
			$this->foo = $foo;
		}
		//如果想直接使用对象，需要在类中定义魔术函数__toString(),
		//当使用对象的时候，会自动调用__toString()
		public function __toString(){
			return $this->foo;
		}
	}
	$obj = new MyClass('Hello');
	echo $obj;
	echo $obj->__toString();
?>