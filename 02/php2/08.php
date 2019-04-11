<?php
// 实例： 读取目录中的条目

/*$dirname = "./itcast";

$handle = opendir($dirname);

while ($line = readdir($handle)) {
    echo iconv('utf-8', 'utf-8', $line)."<br>";
}

closedir($handle);*/

$dirname = "./student.txt";

$handle = fopen($dirname, 'rb');

while ($str= fgets($handle)) {
    echo iconv('utf-8', 'utf-8' , $str)."<br>";
}