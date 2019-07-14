<?php
class Calendar{
	//属性
	private $year;//年
	private $month;//月
	private $start_weekday;//每个月的1号是星期几
	private $days;//一个月有几天

	function __construct(){
	//给属性赋值
	 $this->year = isset($__GET["year"])? $__GET["year"]:date("Y");
	 $this->month = isset($__GET["month"])? $__GET["month"]:date("m");
	 $this->start_weekday = date("w",mktime(0,0,0,$this->month,1,$this->year));
	 $this->days = date("t",mktime(0,0,0,$this->month,1,$this->year));
	}
	function __toString(){
		$out.='<table align="center">';
		$out.=$this->chageDate();
		$out.=$this->weekList();
	    $out.=$this->dayList();
		$out.='</table>';
		return $out;
	}
	private function weekList(){
		$week = array('日','一','二','三','四','五','六');
		$out.='<tr>';

		for($i=0;$i<count($week);$i++){
			$out.='<th class = "fontb">'.$week[$i].'</th>';
		}
		$out.='</tr>';
		return $out;
	}
	private function dayList(){
		$out.='<tr>';
		for($j=0;$j<$this->start_weekday;$j++){
			$out.='<td>&nbsp</td>';
		}
		for($k=1;$k<=$this->days;$k++){
			$j++;
			if($k==date('d'))
				$out.='<td class="fontb">'.$k.'</td>';
			else
				$out.='<td>'.$k.'</td>';
			if($j%7==0)
				$out.='<tr></tr>';
		}
		while($j%7!=0){
			$out.='<td>&nbsp</td>';
			$j++;
		}
		$out.='</tr>';
		return $out;
	}
	private function prevYear($year,$month){
	$year = $year-1;
	if($year<1970){
		$year = 1970;
	}
	return "year={$year}&month={$month}";
}
private function prevMonth($year,$month){
	if($month==1){
		$year = $year-1;
		if($year<1970)
			$year=1970;
		$month=12;
	}else{
		$month--;
	}
	return "year={$year}&month={$month}";
}
private function nextYear($year,$month){
	$year = $year+1;
	if($year>2038){
		$year = 2038;
	}
	return "year={$year}&month={$month}";
}
private function nextMonth($year,$month){
	if($month==12){
		$year = $year+1;
		if($year>2038)
			$year=2038;
		$month=1;
	}else{
		$month++;
	}
	return "year={$year}&month={$month}";
}
	private function chageDate($url="7.php"){
	$out.='<tr>';
	$out.='<td><a href="'.$url.'?'.$this->prevYear($this->year,$this->month).'">'.'<<'.'</a></td>';
	$out.='<td><a href="'.$url.'?'.$this->prevMonth($this->year,$this->month).'">'.'<'.'</a></td>';
	$out.='<td colspan="3">';
	$out.='<select name="year" onchange="window.location=\''.$url.'?year=\'+this.options[selectedIndex].value+\'&month='.$this->month.'\'">';
	for($sy=1970;$sy<=2038;$sy++){
		$selected = ($sy==$this->year)? "selected":" ";
		$out.='<option'.$selected.'value="'.$sy.'">'.$sy.'</option>';
	}
	$out.='</select>';
	$out.='</td>';

	$out.='</tr>';
	return $out;


}
}
?>