<?php
// 实例： 将新浪新闻主页另存到本地

$filename = "http://news.sina.com.cn";
$newname = "./contents";
// 读取网页内容到字符串中
$str = file_get_contents($filename);

// 另存到本地文件

//file_put_contents('./content/a.html', $str);

if(!file_exists($newname)) {
    mkdir($newname, 0777, true);
    file_put_contents($newname.'/a.html', $str);
}else{
    file_put_contents($newname.'/a.html', $str);
}

