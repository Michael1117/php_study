<?php
// 实例：写入文件内容

$filename = "./images/student.txt";

// 以追加的方式打开文件

$handle = fopen($filename ,'ab');
$str = "10040, 李五, 男， 28,高中, 4000, 500, 陕西\r\n";

fwrite($handle, iconv('utf-8', 'utf-8', $str));

//var_dump($handle);
fclose($handle);

var_dump($handle);