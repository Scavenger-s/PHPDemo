<?php
	echo "用户添加的信息表示如下：";
	foreach ($_POST as $key => $value) {
		echo $key."-----".$value."<br>";
	}
?>