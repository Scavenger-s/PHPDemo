<?php
	//
	
	$grade = 80;
	if($grade>=80){
		echo "优秀";
	}elseif ($grade>=70) {
		# code...
		echo "良好";
	}elseif ($grade>=60) {
		echo "合格";
	}else{
		# code...
		echo "不合格";
	}
?>