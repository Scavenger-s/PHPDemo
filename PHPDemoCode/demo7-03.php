<?php
//异常处理
try{
//有可能发生错误的代码
$error = "抛出一个错误";
throw new Exception($error);
echo "以下语句不执行";
}catch(Exception $e){
	echo "捕捉异常：".$e->getMessage().'<br>';
}
echo "try。。。catch外的语句";
?>