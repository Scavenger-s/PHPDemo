<?php
	//0-100
	//过滤0-100之间非3的倍数
	function filter($fun){//过滤器
		for($i = 0;$i<=100;$i++){
			if($fun($i)) continue;
			echo $i." ";
		}
	}
	//过滤0-100之间非回文的数	
	function one($num){
		return $num%3==0;
	}
	function two($num){
		return $num==strrev($num);
	}
	filter('one');
	echo "—————————————————<br>";
	filter('two');
?>