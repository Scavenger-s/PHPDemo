<?php
//统计某个文件夹的大小
function dirSize($path){
	$dir_size = 0;//文件的总大小
	if($dir_handle=opendir($path)){
		while ($filename=readdir($dir_handle)) {
			if($filename!="."&& $filename!=".."){
				$subFile = $path."/".$filename;
				if(is_dir($subFile)){//是否为文件夹
					$dir_size += dirSize($subFile);
				}
				if(is_file($subFile)){//是否为文件
					$dir_size += filesize($subFile);
				}
			}
		}
		closedir($dir_handle);
		return $dir_size;
	}
}
$size = dirSize("C:\\AppServ\\www\\15");
echo $size;
copy(原路径，目标路径);
mkdir(路径);//创建文集夹
?>