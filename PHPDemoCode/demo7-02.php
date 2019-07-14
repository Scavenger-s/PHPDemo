<?php
	// 用户自定义错误类型
	//set_error_handler()----》函数
	//
	function error_handler($error_level,$error_message,$file,$line){
		switch ($error_level) {
			//提醒等级
			case E_NOTICE:
			case E_USER_NOTICE:$error_level='提醒——';break;
			//警告等级
			case E_WARNING:
			case E_USER_WARNING:$error_level='警告——';break;
			//错误等级
			case E_ERROR:
			case E_USER_ERROR:$error_level='错误——';break;
			default:
				$error_level = '未知错误'; break;
		}
		printf("<font color='#FF000'><b>%s</b></font>:<b>%s</b> 在 <b>%s</b>文件出错，在 <b>%d</b> 行<br>",$error_level,$error_message,$file,$line);
	}
	set_error_handler('error_handler');//关键
	echo $a;

	echo 3/0;

	trigger_error('这是用户自定义的错误类型',E_USER_ERROR);





?>