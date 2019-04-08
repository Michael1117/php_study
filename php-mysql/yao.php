<?php
// 数据库的基本配置
$db_host = "localhost";
$db_port = "3306";
$db_user = "root";
$db_pass = "12345678";
$db_name = "itcast";
$charset = "utf8";

// 2 PHP连接MySQL服务器
if (!$link = @mysqli_connect($db_host . ":" . $db_port, $db_user, $db_pass)) {
    echo "<h2>PHP连接服务器失败!</h2>";
    echo "系统错误信息：" . mysqli_connect_error();
    die();
}
// 3 选择当前数据库
if (!mysqli_select_db($link, $db_name)) {
    echo "<h2>选择数据库{$db_name}失败</h2>";
    die();
}

// 4 设置数据库返回数据字符集

mysqli_set_charset($link, $charset);

// 5 执行查询的SQL语句
$sql = "SELECT * FROM student WHERE salary < 8000";

$result = mysqli_query($link, $sql);


// 6 从结果集中获取记录数

$records = mysqli_num_rows($result);

echo "记录数为：$records";