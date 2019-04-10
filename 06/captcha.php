<?php
/*
 * 图像验证码
 *
 *
 *
 */
// 1 产生4位随机验证码字符串

$arr1 = array_merge(range('a', 'z'), range(0, 9), range('A', 'Z'));

shuffle($arr1);


$arr2 = array_rand($arr1, 4);

$str = "";
foreach ($arr2 as $index) {
    $str .= $arr1[$index];
}


/*print_r($arr1);
echo "<hr>";
print_r($arr2);
echo $str;*/

// 2 创建空画布

$width = 70;
$height = 22;

$img = imagecreatetruecolor(70, 22);

// 3 绘制带填充的矩形

$color1 = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));

imagefilledrectangle($img, 0, 0, $width, $height, $color1);

// 4 绘制像素点

for ($i = 0; $i <= 100; $i++) {
    $color2 = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    imageline($img, mt_rand(0, $width), mt_rand(0, $height), $color2);
}

// 5 绘制线段

