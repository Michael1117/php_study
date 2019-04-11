<?php

// (1) 数据库配置信息

$db_host = "localhost";
$db_port = "3306";
$db_user = "root";
$db_pass = "12345678";
$db_name = "itcast";
$charset = "utf8";

// (2) PHP连接MySQL数据库服务器
if (!$link = @mysqli_connect($db_host . ":" . $db_port, $db_user, $db_pass)) {
    echo "<h2>PHP连接MySQL服务器失败！</h2>";
    echo "系统错误信息：" . mysqli_connect_error();
    die();
}

// (3) 选择当前数据库

if (!mysqli_select_db($link, $db_name)) {
    echo "<h2>选择当前数据库{$db_name}失败！</h2>";
    die();
}

// (4) 设置客户端字符集

mysqli_set_charset($link, $charset);

// 执行查询的SQL语句

/*$sql = "SELECT * FROM student";

$result = mysqli_query($link, $sql);*/

//var_dump($result);

/*$arr = mysqli_fetch_row($result);
$arr = mysqli_fetch_row($result);

print_r($arr);*/

// (6) 从结果集中获取一行数据，并作为关联数组(字段名作为下标) 返回

//$arr = mysqli_fetch_assoc($result);
//$arr = mysqli_fetch_array($result, MYSQLI_ASSOC);

//$arr = mysqli_fetch_array($result, MYSQLI_NUM);


// MYSQLI_ASSOC = 1 MYSQLI_NUM = 2 MYSQLI_BOTH = 3
//$arr = mysqli_fetch_array($result);

/*$arr = mysqli_fetch_all($result, MY);
print_r($arr);*/

/*$sql = "SELECT * FROM student where salary < 8000";
$result = mysqli_query($link, $sql);

$records = mysqli_num_rows($result);

echo "记录数为：" .$records;*/

$sql = "UPDATE student SET salary=salary-10 WHERE salary<5000";

mysqli_query($link, $sql);

//$records = mysqli_affected_rows($link);

//echo "共有{$records}个学生工资更新成功！";

