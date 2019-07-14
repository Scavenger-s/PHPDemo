<html>
<head><title>留言板</title></head>
<body>
	<?php
	//内容文件保存的位置
	$filename = "C:\\AppServ\\www\\studyphp2\\data.txt";
	//判断用户是否提交信息，如果提交将留言的内容保存到指定文件中
	if(isset($_POST["sub"])){//写文件
		//每个信息之间使用||分割，一条信息最后使用<|>
		$message = $_POST["username"]."||".$_POST["title"]."||".$_POST["mess"]."<|>";
		writeMessage($filename,$message);//自定义函数
	}
	if(file_exists($filename)){//读文件
		readMessage($filename);
	}
	function writeMessage($filename,$message){
		//将留言板的内容写到文件中
		//每次写文件的时候，只能有一个用户来读或者写文件
		//文件锁--->保证同一时间，只能有一个用户对文件进行读写操作
		$fp = fopen($filename,"a");//追加文件
		if(flock($fp, LOCK_EX)){//给文件上锁
			fwrite($fp, $message);
			//给文件解锁
			flock($fp,LOCK_UN);
		}else{
			echo "不能锁文件";
		}
		fclose($fp);
	}
	function readMessage($filename){
		//打开保存的文件，并且显示到页面上
		$fp = fopen($filename,"r");
		//同步概念
		flock($fp,LOCK_SH);
		$buffer = "";
		while (!feof($fp)) {
			$buffer.=fread($fp,1024);
		}
		//将文件按照条数存放到一个数组中<|>
		$data = explode("<|>", $buffer);
		//将数组的每一个元素再进行分割
		foreach ($data as $line) {
			list($username,$title,$message) = explode("||",$line);
			if($username!="" && $title!="" && $message!=""){
				echo $username."说：";
				echo $title.",";
				echo $message."<hr>";
			}
		}
		flock($fp,LOCK_UN);
		fclose($fp);
	}
	//1.自己添加样式
	//2.增加“删除”功能
	//3.添加“时间”
		?>
	<form action="" method="post">
		用户名：<input type="text" name="username" size="10"><br>
		标  题：<input type="text" name="title"><br>
		<textarea name="mess" rows=5 cols=30>请在这里输入留言信息！</textarea>
		<input type="submit" name="sub" value="留言">
	</form>
</body>
</html>