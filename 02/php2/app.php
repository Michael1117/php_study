<?php

// 实例： 读取目录中的条目

$dirname = "./itcast";

// 打开目录，返回目录句柄资源

$handle = opendir($dirname);

// 从目录句柄资源中取回一个条目(文件或目录)

// 循环结束的标志 当资源中所有的条目全部读取完毕 返回false
while ($line = readdir($handle)) {
    //echo $line."<br>";
}

echo $line;