<?php
//字符串排序（字典排序 自然排序）
//1 11 22 2--->字典排序：1 11 2 22
//             自然排序：1 2 11 22
$files = array("file1.txt","file2.txt","file11.txt","file22.txt");
function mySort($files,$index=FALSE)
{
	for($i=0;$i<count($files);$i++){
		for($j=0;$j<count($files)-1;$j++){
			if($index){//字典排序
				if(strcmp($files[$j],$files[$j+1])>0){
					$temp = $files[$j];
					$files[$j] = $files[$j+1];
					$files[$j+1] = $temp;
				}
			}else{//自然排序
			if(strnatcmp($files[$j],$files[$j+1])>0){
					$temp = $files[$j];
					$files[$j] = $files[$j+1];
					$files[$j+1] = $temp;
				}
			}
		}
	}
	return $files;
}
print_r(mySort($files,true));
print_r(mySort($files,FALSE));
?>