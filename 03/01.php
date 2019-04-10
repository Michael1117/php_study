<?php
//phpinfo();

$filename = "./images/01.png";
// 创建一个空画布

//$img = imagecreatetruecolor(400, 300);

$img = imagecreatefrompng($filename);

// 打印变量 ： 创建画布成功返回图像资源，否则返回false

//var_dump($img);

header("Content-Type:image/png");

imagepng($img);


// 销毁图像资源

imagedestroy($img);

var_dump($img);