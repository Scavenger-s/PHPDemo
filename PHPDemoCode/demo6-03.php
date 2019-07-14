<?PHP
	//大小写转换
	$str1 = "this is a book";
	//转换为小写
	echo strtolower($str1)."<br>";
	//转换为大写
	echo strtoupper($str1)."<br>";
	//将首字母变为大写
	echo ucfirst($str1)."<br>";
	//将每一个单词首字母变为大写
	echo ucwords($str1);
?>