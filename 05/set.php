<?php

// 开启SESSION 会话： 产生新的SESSIONID 或重用传递过来的SessionID
// 产生SessionID, 并创建对应的Session文件
// 添加SESSION 数据
session_start();

$_SESSION['username'] = "admin";

$_SESSION['password'] = "123456";