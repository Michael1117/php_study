<?php
    //header("Content-Type: text/html;charset=utf-8");

// 创建一个新的目录  linux 文件名 文件夹名都区分大小写
$dirname = "./public/a/b/c/d";

// 第3个参数 ： 如果上层目录不存在，则会递归创建
mkdir($dirname, 0777,true);



