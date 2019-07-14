<?php
class Vcode{
	//属性
	private $width;//验证码图片的宽度
	private $height;//验证码图片的高度
	private $codeNum;//验证码字符的个数
	private $disturbColorNum;//干扰点的个数
	private $checkCode;//验证码的字符串
	private $image;//验证码的图片资源
	//构造方法----->初始化属性
	function __construct($width=80,$height=20,$codeNum=4){
		$this->width = $width;
		$this->height = $height;
		$this->codeNum = $codeNum;
		//干扰点
		$number = floor($height*$width/15);
		if($number>240-$codeNum)
			$this->disturbColorNum = 240-$codeNum;
		else
			$this->disturbColorNum = $number;
		$this->checkCode = $this->createCheckCode();//自定义函数
	}
	function __toString(){
		//1.要将字符串保存到服务器中
		$_SESSION["code"] = strtoupper($this->checkCode);
		//2.生成验证码的图片
		$this->outImg();//自定义函数
		return "";
	}
	private function outImg(){
		//任务：生成验证码的图片
		//1.创建验证码的画布
		$this->getCreateImage();//自定义的函数
		//2.在图片中生成干扰点
		$this->setDisturColor();//自定义函数
		//3.在图片中生成验证码字符
		$this->outputText();//自定义函数
		//4.输出验证码图片
		$this->outputImage();//自定义函数
	}
	private function getCreateImage(){
		//1.创建画布
		$this->image = imagecreatetruecolor($this->width,$this->height);//创建一个真彩色的画布
		//2.创建底色RGB(0-255)
		$backColor = imagecolorallocate($this->image,rand(225,255),rand(225,255),rand(225,255));
		//3.填充画布
		@imagefill($this->image, 0, 0, $backColor);
		//4.创建边框颜色
		$border = imagecolorallocate($this->image,0,0,0);
		//5.加边框
		imagerectangle($this->image,0,0,$this->width-1,$this->height-1,$border);
	}
	private function createCheckCode(){
	//创建一个验证码的字符串
	$code = "1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
	for($i=0;$i<$this->codeNum;$i++){
		$char = $code{rand(0,strlen($code)-1)};
		$ascii .= $char;
	}
	return $ascii;	
	}
	//在图像中增加干扰点和弧线
	private function setDisturColor(){
		//1.增加干扰点
		for($i=0;$i<$this->disturbColorNum;$i++){
			$color = imagecolorallocate($this->image,rand(0,255),rand(0,255),rand(0,255));
			imagesetpixel($this->image,rand(1,$this->width-2),rand(1,$this->height-2),$color);
		}
		//2.增加弧线
		for($i=0;$i<10;$i++){
			$color = imagecolorallocate($this->image,rand(0,255),rand(0,255),rand(0,255));
			imagearc($this->image,rand(-10,$this->width),rand(-10,$this->height),rand(30,300),rand(20,200),55,44,$color);
		}
	}
	private function outputText(){
		//在图片中写字符串，随机颜色，随机摆放
		for($i=0;$i<=$this->codeNum;$i++){
		$fontcolor = imagecolorallocate($this->image,rand(0,128),rand(0,128),rand(0,128));
		$fontsize = rand(3,5);
		//确定当个字符的位置
		$x = floor($this->width/$this->codeNum)*$i+3;
		$y = rand(0,$this->height-imagefontheight($fontsize));
		imagechar($this->image,$fontsize,$x,$y,$this->checkCode{$i},$fontcolor);
		}
	}
	private function outputImage(){
		//将图片输出到浏览器 GD图形图像库
		//gif png jpg
		if(imagetypes()& IMG_GIF){
			ob_clean();
			header("Content-type:image/gif");
			imagegif($this->image);
		}elseif (imagetypes()& IMG_JPG) {
			ob_clean();
			header("Content-type:image/jpeg");
			imagejpeg($this->image,"",0.5);
		}elseif (imagetypes()& IMG_PNG) {
			ob_clean();
			header("Content-type:image/png");
			imagepng($this->image);
		}else{
			die("不支持图像类型");
		}
	} 
	function __destruct(){
		imagedestroy($this->image);
	}
}
?>