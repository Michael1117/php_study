<?php

// 实例： 以只读方式打开已存在的文件

/*$filename = "./a.txt";

// 打开文件  返回文件句柄资源
$handle = fopen($filename, 'rb');

var_dump($handle);*/


// 写入方式打开不存在的文件  会创建
/*$filename = "./itcast.txt";

// 打开文件  返回文件句柄资源
$handle = fopen($filename, 'wb');

// 关闭文件

fclose($handle);

var_dump($handle);*/


// 读取一张

/*$filename = "./images/01.png";

// 以只读方式打开

$handle = fopen($filename, 'rb');

// 读取全部数据: filesize() 函数获取文件大小 以字节为单位

$str = fread($handle, filesize($filename));

// 告诉浏览器： 以图片数据显示
header("Content-Type:image/jpg");

echo $str;

// 关闭文件

fclose($handle);*/


// 读取记事本的学生信息

/*$filename = "./student.txt";

// 以只读方式打开

$handle = fopen($filename, 'rb');

// 读取一行数据： 碰到换行符 文件结束符  都会终止读取

//$str = fgets($handle);

while ($str = fgets($handle)) {
    echo $str;
}*/


// 读取记事本的学生信息数据

$filename = "http://news.sina.cn";

// 不用打开文件 和 关闭文件

$arr = file($filename, 2 | 3);

// 打开数组
print_r($arr);