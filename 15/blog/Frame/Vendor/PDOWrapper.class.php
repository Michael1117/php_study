<?php
// 声明命名空间
namespace Frame\Vendor;

// 定义最终的PDOWrapper类

final class PDOWrapper
{
    // 数据库配置信息
    private $db_type;  // 数据库类型
    private $db_host;  // 主机名
    private $db_port;
    private $db_user;
    private $db_pass;
    private $db_name;
    private $charset;

    // 公共的构造方法
    public function __construct()
    {
        $this->db_type = $GLOBALS['config']['db_type'];
        $this->db_host = $GLOBALS['config']['db_host'];
        $this->db_port = $GLOBALS['config']['db_port'];
        $this->db_user = $GLOBALS['config']['db_user'];
        $this->db_pass = $GLOBALS['config']['db_pass'];
        $this->db_name = $GLOBALS['config']['db_name'];
        $this->charset = $GLOBALS['config']['charset'];

        $this->createPDO();   // 创建PDO
        //$this->setErrMode();   // 设置报错模式

    }

    // 私有的创建PDO 对象的方法
    private function createPDO()
    {
        // 构建DSN字符串
        // $dsn = "{$this->db_type}:host={$this->db_host};port={$this->db_port};dbname={$this->db_name};charset={$this->charset}";

        //echo $dsn;
        // 创建PDO类的对象
        //$pdo = new \PDO($dsn, $this->db_user, $this->db_pass);

        try {
            $dsn = "{$this->db_type}:host={$this->db_host};port={$this->db_port};dbname={$this->db_name};charset={$this->charset}";

            //echo $dsn;
            // 创建PDO类的对象
            $pdo = new \PDO($dsn, $this->db_user, $this->db_pass);
        } catch (\PDOException $e) {
            echo "<h2>创建PDO对象失败！</h2>";
            echo "错误编号:" . $e->getCode();
            echo "错误行号：" . $e->getLine();

            echo "<br>错误文件:" . $e->getFile();
            echo "<br>错误信息:" . $e->getMessage();
            die();
        }

        //var_dump($pdo);
    }

    // 私有的设置PDO报错模式
    private function setErrMode()
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    // 执行SQL 语句： insert,update,delete,set等
    public function exec($sql)
    {
        try {
            return $this->pdo->exec($sql);
        } catch (\PDOException $e) {
            $this->showErrMsg($e);
        }
    }

    // 获取单行数据： SELECT * FROM student
    public function fetchOne($sql)
    {
        try {
            // 执行SQl 语句， 并返回结果集对象PDOStatement
            $PDOStatement = $this->pdo->query($sql);
            // 返回一条记录
            return $PDOStatement->fetch(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            $this->showErrMsg($e);
        }
    }

    // 获取单行数据： SELECT * FROM student
    public function fetchAll($sql)
    {
        try {
            // 执行SQl 语句， 并返回结果集对象PDOStatement
            $PDOStatement = $this->pdo->query($sql);
            // 返回一条记录
            return $PDOStatement->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            $this->showErrMsg($e);
        }
    }

    // 获取记录数
    public function rowCount($sql)
    {
        try {
            // 执行SQl 语句， 并返回结果集对象PDOStatement
            $PDOStatement = $this->pdo->query($sql);
            // 返回一条记录
            return $PDOStatement->rowCount();
        } catch (\PDOException $e) {
            $this->showErrMsg($e);
        }
    }

    // 显示错误信息
    private function showErrMsg($e)
    {
        echo "<h2>执行SQL语句失败！</h2>";
        echo "错误编号:" . $e->getCode();
        echo "错误行号：" . $e->getLine();

        echo "<br>错误文件:" . $e->getFile();
        echo "<br>错误信息:" . $e->getMessage();
        die();
    }
}