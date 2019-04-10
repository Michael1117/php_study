<?php
// 开启SESSION会话

session_start();

// 删除SESSION数据

//unset($_SESSION['username']);
//unset($_SESSION['password']);

//$_SESSION = array();  // 可以

session_destroy();


