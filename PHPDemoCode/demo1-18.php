<?php
	for($i=1,$j=20;$i<20;$i++){
		while ($j--) {
			# code...
			if($j==5) goto end;
		}
	}
	echo "i =".$i;
	end:
	echo "i = ".$i.",j = ".$j;
?>