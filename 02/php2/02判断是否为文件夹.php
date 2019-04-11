<?php
//判断当前文件是文件还是目录

$dirname = "./public";

if(is_dir($dirname)) {
    echo "{$dirname}是目录！";
}else{
    echo "{$dirname}是文件！";
}