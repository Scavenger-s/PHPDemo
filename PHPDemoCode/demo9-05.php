<?php
function copyDir($dirSrc,$dirTo){
	if(is_file($dirTo)){
		echo "目标不是目录不能创建";
		return；
	}
	if(!file_exists($dirTo)){
		mkdir($dirTo);
	}
	if($dir_handle = opendir($dirSrc)){
		while ($filename = readdir($dir_handle)) {
			if($filename!="." && $filename!=".."){
				$subSrcFile = $dirSrc."/".$filename;
				$subToFile = $dirTo."/".$filename;
				if(is_dir($subSrcFile))
					copyDir($subSrcFile,$subToFile);
				if(is_file($subSrcFile))
					copy($subSrcFile,$subToFile);
			}
		}
		closedir($dir_handle);
	}
}
copyDir("原路径","目标路径");
?>