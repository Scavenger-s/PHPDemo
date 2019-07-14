<?php
//在数组中有一个全局数组----_COOKIE
// print_r($_COOKIE);
foreach ($_COOKIE["user"] as $key => $value) {
	echo $key.":".$value."\n";
}
?>