<?php
// 数据库配置信息

$dsn = "mysql:host=127.0.0.1;port=3306;dbname=itcast;charset=utf8";

$username = "root";
$password = "12345678";


// 创建PDO类的对象

$pdo = new PDO($dsn, $username, $password);

//var_dump($pdo);

// 执行插入的SQL语句

$sql = "INSERT INTO student VALUES(null, '刘东明', 1, default , '大专', 6000, 400, '山东省')";

$records = $pdo->exec($sql);

echo "成功插入了{$records}条记录";