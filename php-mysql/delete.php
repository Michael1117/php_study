<?php
// 包含连接数据库的公共代码
require_once("./conn.php");

// 获取地址栏数据

$id = $_GET['id'];

//print_r($id);
// 构建删除的SQL 语句

$sql = "DELETE FROM student WHERE id = $id";

//echo $sql;

// 执行SQL语句

if (mysqli_query($link, $sql)) {
    echo "<h2>id={$id}的记录删除成功！</h2>";
    // 3秒跳转到list.php
    header("refresh:3;url=./list.php");
    // 终止程序向下执行
    die();
}else{
    echo "<h2>id={$id}的记录删除失败！</h2>";
    // 3秒跳转到list.php
    header("refresh:3;url=./list.php");
    // 终止程序向下执行
    die();
}
