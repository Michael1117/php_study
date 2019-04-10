<?php
// 递归删除phpMyAdmin目录

function del_all_files($dir)
{
    $handle = opendir($dir);

    while ($line = readdir($handle)) {


        if ($line == "." || $line == "..") {
            continue;
        }

        // 判断是文件 还是文件夹
        if(is_dir($dir."/".$line)) {
            // 递归调用
            del_all_files($dir."/".$line);
        }else{
            // 如果是文件 直接删除
            unlink($dir."/".$line);
        }
    }

    closedir($handle);

    // 删除目录

    rmdir($dir);
}

del_all_files("./phpMyAdmin");