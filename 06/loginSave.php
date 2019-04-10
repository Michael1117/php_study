<?php

// 包含连接数据库的公共文件

require_once("./conn.php");

// 开启SESSION会话

session_start();

// 判断表单提交是否合法
if (isset($_POST['token']) && $_POST['token'] == $_SESSION['token']) {
    // 获取表单提交数据
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $verify = $_POST['verify'];

    // 判断验证码与服务器是否保存的一致

    // 判断用户名和密码与数据库是否一致
    $sql = "SELECT * FROM user WHERE username='$username' and password='$password'";

    $result = mysqli_query($link, $sql);  // 执行SQL语句，并返回结果集对象

    $records = mysqli_num_rows($result);  // 取回记录数

    if(!$records) {
        echo "<h2>用户名或密码不正确！</h2>";
        header("refresh:4;url=./login.php");
        die();
    }
    // 保存用户信息到SESSION中
    $_SESSION['username'] = $username;

    // 跳转到相册首页
    header("location:./index.php");
} else {
    // 直接跳转到 login.php
    header("location:./login.php");
}
