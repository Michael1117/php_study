<?php
// 读取远程网页数据

/*$filename = "http://news.sina.com.cn";

// 不用打开文件 和关闭文件

$arr = file_get_contents($filename);

// 打开数组

print_r($arr);*/



// 读取记事本学生信息 并用表格显示出来

$filename = "./student.txt";

// 将记事本数据读入数组中

$arr = file($filename, 2|4);

// echo 只能输出字符串 ，对象数组都不能输出

//print_r($arr);


$str = "<table border='1px'>";
foreach ($arr as $value) {
    $arr2 = explode(',', $value);
    //print_r($arr2);

    //die();
    $str .= "<tr>";
    foreach ($arr2 as $value2) {

        $str .= "<td>".$value2."</td>";
    }
    //$str .= " <tr>";
    //$str .= "   <td>{$value}</td>";
    $str .="</tr>";
}
$str .= "</table>";

echo $str;
