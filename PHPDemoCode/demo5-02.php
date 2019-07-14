<?php
class Person{//

private $name;//只能在类中访问，类的外部是不能直接访问属性的
private $sex;
private $age;
function __construct($name='',$sex='男',$age=1){//初始化属性
	$this->name = $name;
	$this->sex = $sex;
	$this->age = $age;
}
//魔法函数：__  自动执行
//__set():当一个属性赋值的时候，会自动调用__set()魔法函数
public function __set($propertyName,$propertyValue){
	if($propertyName=="sex"){
		if(!($propertyValue=="男"||$propertyValue=="女"))
			{ return;}
	}
	if($propertyName == "age"){
		if($propertyValue>150||$propertyValue<0){
			return;
		}
	}
	$this->$propertyName = $propertyValue;
}
//__get():当读取属性值的时候，会自动调用__get()函数
public function __get($propertyName){
	if($propertyName=="sex"){
		return "保密";		
	}else{
		return $this->$propertyName;
	}
}
//__isset():测试私有属性是否在类中,当执行isset()函数的时候，会自动调用__isset()
public function __isset($propertyName){
	if($propertyName=="name"){
		return;
	}
	return isset($this->$propertyName);
}
//__unset():删除私有属性的魔法函数。当执行unset()函数(删除对象的属性)的时候，会自动调用__unset()魔法函数
public function __unset($propertyName){
	if($propertyName=="name"){
		return;
	}
	unset($this->$propertyName);
}
function say(){
	echo "我叫".$this->name.' 今年'.$this->age.'岁， 性别为'.$this->sex.'<br>';
}
function run(){
	echo "正在跑步。。。";
}
}
$per1 = new Person("张三",'男',20);
$per1->say();
$per1->sex = 'aaa';
$per1->age = 50;
$per1->say();
echo $per1->sex;
var_dump(isset($per1->name));
var_dump(isset($per1->age));
var_dump(isset($per1->sex));
var_dump(isset($per1->id));
unset($per1->name);
unset($per1->sex);//删除
unset($per1->age);
$per1->say();
?>