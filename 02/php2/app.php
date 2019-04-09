<?php

// 更改目录或文件名称  确定原来的目录必须存在

// 注意： 如果原目录和新目录都位于同一心目录下，则认为是该名；
// 注意： 如果原目录和新目录位于不同父目录下，则认为是移动

/*$olbName = "./itcast";

$newName = "./public";

rename($olbName, $newName);*/

// 目录移动
/*$olbName = "./public";

$newName = "./itcast/public";

rename($olbName, $newName);*/



// 打开目录

$dirname = "./itcast";

// 打开目录， 成功返回目录句柄(资源型),失败返回false

$handle = opendir($dirname);

var_dump($handle);