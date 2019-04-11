<?php
// 更改目录或文件名称，确定原目录必须存在
// 注意： 如果原目录

$oldname = "./public";

$newname = "./itcast/pub";

rename($oldname, $newname);