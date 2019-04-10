<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "12345678";
$db_name = "php69";
$charset = "utf8";

if (!$link = @mysqli_connect($db_host, $db_user, $db_pass)) {
    echo "<h2>PHP连接MySQL服务器失败！</h2>";
    die();
}


// 3 选择当前数据库

if (!mysqli_select_db($link, $db_name)) {
    echo "<h2>选择数据库{$db_name}失败！</h2>";
    die();
}

//4 设置字符集

mysqli_set_charset($link, $charset);
