<?php
/*$filename = "./images/2.jpg";

$img = imagecreatefromjpeg($filename);

header("Content-Type:image/jpeg");

imagejpeg($img, "./images/03.jpg", 100);

// 销毁图像资源

imagedestroy($img);*/


$img = imagecreatetruecolor(400, 300);

$color1 = imagecolorallocate($img, 0xFF, 0x00, 0x00);

$color2 = imagecolorallocate($img, 255, 255, 0);

// 给画布填充背景颜色 ，imagefill()

imagefill($img, 0,0, $color2);

header("content-type:image/png");

imagepng($img);

imagedestroy($img);