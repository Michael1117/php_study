<?php
/*//(0)Home应用常量定义
define("DS",DIRECTORY_SEPARATOR);//斜线(/、\)，根据操作系统决定
define("ROOT_PATH",getcwd().DS);//网站根目录
define("APP_PATH",ROOT_PATH."Home".DS);//应用目录、平台目录
//(1)包含核心框架类文件
require(ROOT_PATH."Frame".DS."Frame.class.php");
//(2)框架初始化
\Frame\Frame::run();

*/

// 常量定义
define("DS", DIRECTORY_SEPARATOR);  // 动态目录分割符
define("ROOT_PATH", getcwd().DS);   // 当前目录
define("APP_PATH", ROOT_PATH."Home".DS);  // home 目录



/*echo ROOT_PATH.'44';
die();*/


/*echo ROOT_PATH."Frame".DS."Frame.class.php";
die();*/
// 包含框架初始类
require_once(ROOT_PATH."Frame".DS."Frame.class.php");

// 调用框架初始化方法
Frame\Frame::run();

// 创建PDOWrapper类对象

$pdo = new Frame\Vendor\PDOWrapper();

$arr = $pdo -> fetchOne("SELECT * FROM user");

print_r($arr);