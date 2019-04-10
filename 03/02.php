<?php
$img = imagecreatetruecolor(400, 300);

header("Content-Type: image/jpeg");


// 输出图像到浏览器：告诉浏览器输出的内容为图像数据
imagejpeg($img);

//销毁图像资源
imagedestroy($img);