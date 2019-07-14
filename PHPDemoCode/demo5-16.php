<?php
interface USB{
	function run();
}
class UKey implements USB{
function run(){
	echo "执行usb键盘";
}
}

class UMouse implements USB{
	function run(){
		echo "执行usb鼠标";
	}
}
class UStore implements USB{
	function run(){
		echo "执行usb硬盘";
	}
}
class Computer {
	function useUSB($usb){
		$usb->run();
	}
}
$computer = new Computer();
$computer->useUSB(new UMouse());
$computer->useUSB(new UStore());
//描述同种类型事物，实现不同方法的时候，使用抽象类
//描述不同类型事物，实现不同方法的时候，使用接口
//
?>