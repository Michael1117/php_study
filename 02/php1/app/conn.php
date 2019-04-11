<?php

$db_host = "localhost";
$db_port = "3306";
$db_user = "root";
$db_pass = "12345678";
$db_name = "itcast";
$charset = "charset";

if (!$link = @mysqli_connect($db_host. ":".$db_port, $db_user, $db_pass)) {
    echo "<h2>PHP连接MySQL服务器失败！</h2>";
    echo "系统错误信息：" . mysqli_connect_error();
    die();
}

if (!mysqli_select_db($link, $db_name)) {
    echo "<h2>选择数据库{$db_name}失败！</h2>";
    die();
}


mysqli_set_charset($link, $charset);

