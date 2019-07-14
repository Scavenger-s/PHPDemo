<?php
	function table(){//(标题，行，列)
		echo "<table align = 'center' width=600>";
		echo "<caption><h1>通过函数输出表格</h1></caption>";
		for($out = 0;$out<10;$out++){//控制行
			$bgcolor = $out%2==0? "#FFFFF":"#DDDDD";
			echo "<tr bgcolor = ".$bgcolor.">";
			for($in = 0;$in<10;$in++){//列
				echo "<td>".($out*10+$in)."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	table();
?>