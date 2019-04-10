<?php
// 开启SESSION会话
session_start();

echo "用户名：".$_SESSION['username']."<br>";

echo "密码：".$_SESSION['password']."<hr>";

// 打印$_SESSION 数组

print_r($_SESSION);