<?php

// 创建一个空画布
$img = imagecreatetruecolor(400, 300);

// 分配颜色

$color1 = imagecolorallocate($img, 0, 0, 0);

$color2 = imagecolorallocate($img, 255, 0, 0);

// 填充背景色

imagefill($img, 0, 0, $color1);
// 往图像上写入一行字符串(非中文)

$str = "Welcome to China";
imagestring($img, 25, 20, 20, $str, $color2);

imagestring($img, 25, 20, 40, $str, $color2);

// 输出图像浏览器

header("Content-Type:image/png");

imagepng($img);
//销毁图像资源

imagedestroy($img);