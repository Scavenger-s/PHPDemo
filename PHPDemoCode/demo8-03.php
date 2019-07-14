<?php
//计算程序（脚本）的执行时间
class Timer{
	private $startTime = 0;
	private $endTime = 0;

	function start(){
		$this->startTime = microtime(true);
	}
	function stop(){
		$this->endTime = microtime(true);
	}
	function spent(){
		return round($this->endTime-$this->startTime,4);
	}
}
$thimer = new Timer();
$thimer->start();
//程序
//
usleep(100000);//毫秒
$thimer->stop();

echo "程序执行的时间为：".$thimer->spent();





?>