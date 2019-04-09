<?php
// 判断目录是文件 还是目录，  linux 没有文件夹 都是文件

/*$dirname = "./public";
if(is_dir($dirname)) {
    echo "{$dirname}是目录";
}else{
    echo "{$dirname}是文件";
}
*/

// 判断文件是否存在

/*$dirname = "./public";

if (file_exists($dirname)) {
    echo "{$dirname}文件存在！<br/>";
    // 如果文件存在，再判断它是目录还是普通文件
    if (is_dir($dirname)) {
        echo "{$dirname}是一个目录！";
    } else {
        echo "{$dirname}是一个文件！";
    }
} else {
    echo "{$dirname}文件不存在！";
}*/

/*$dirname = "./public";

if(file_exists($dirname)) {

    //判断是不是目录
    if(is_dir($dirname)) {
        // 删除目录： 该目录必须是空的
        rmdir($dirname);
    }
}*/

// 更改文件或目录的权限  权限值不能加""

/*$dirname = "./public";

// windows 会忽略权限值，而linux下才有效果
//chmod($dirname, 0444);

chmod($dirname, 0754);


// 获取文件的权限值

$int = fileperms($dirname);

// 十进制转成8进制

$int = decoct($int);

//echo $int;

// 截取字符串：40777转成0777

echo substr($int, -4);*/