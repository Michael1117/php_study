<?php
// 判断文件是否存在
$dirname = "./public";

if(file_exists($dirname)){
    echo "{$dirname}文件存在！";
    if(is_dir($dirname)) {
        echo "{$dirname}是目录！";
    }else{
        echo "{$dirname}是文件！";
    }
}else{
    echo "{$dirname}文件不存在！";
}