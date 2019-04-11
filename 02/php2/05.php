<?php
// 更改文件或目录的权限，权限值不能加引号

$dirname = "./itcast";
// windows会忽略权限值，而linux下才能有效果
chmod($dirname, 0754);

// 获取文件的权限值，返回十进制
$int = fileperms($dirname);

// 10->8

$int = decoct($int);

// 截取字符串 ： 40777 -> 0777
echo $int;
echo substr($int, -4);