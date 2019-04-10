<?php
// 包含连接数据库的公共文件
require_once("./conn.php");

// 分页参数： 每页显示多少条
$pageSize = 3;

// 获取当前页码和计算开始行号

$page = isset($_GET['page']) ? $_GET['page'] : 1;  // 开始页码

$startrow = ($page - 1) * $pageSize; // 开始行号

// 获取总记录数  和计算总页数

$sql = "SELECT * FROM student";

$result = mysqli_query($link, $sql);

$records = mysqli_num_rows($result);

$pages = ceil($records / $pageSize);

// 构建查询的分页的SQL语句
$sql .= " ORDER BY id DESC LIMIT {$startrow}, {$pageSize}";

// 执行SQL语句  并返回结果集对象
$result = mysqli_query($link, $sql);

$arrs = mysqli_fetch_all($result, MYSQLI_ASSOC);
/*
// 构建查询的SQL 语句

$sql = "SELECT * FROM student ORDER BY id DESC ";

// 执行查询的SQL语句 并返回结果集对象

$result = mysqli_query($link, $sql);

// 从结果集中获取多行数据

$arrs = mysqli_fetch_all($result, MYSQLI_ASSOC);*/

//print_r($arrs);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>学生信息管理中心</title>
    <script type="text/javascript">

    </script>
    <style type="text/css">

        .pagelist {

        }

        .pagelist a {
            display: inline-block;
            padding: 5px 10px;
            text-decoration: none;
            margin: 0 5px;
            border: 1px solid #ccc;
        }

        .pagelist a:hover {
            color: red;
            background-color: #99cc00;
        }

        .pagelist span {
            padding: 5px 8px;
        }

    </style>
</head>
<body>
<div style="text-align: center; padding-bottom: 10px">
    <h2>学生信息管理中心 </h2>
    <a href="">添加学生</a>
    <div color="red">共有<b>50</b>个学生信息</div>
</div>

<table width="600" border="1" align="center" rules="all" cellpadding="5">
    <tr bgcolor="aqua">
        <th>编号</th>
        <th>姓名</th>
        <th>性别</th>
        <th>年龄</th>
        <th>学历</th>
        <th>工资</th>
        <th>奖金</th>
        <th>籍贯</th>
        <th>操作事项</th>
    </tr>
    <?php
    // 循环二维数组
    foreach ($arrs as $arr) {
        ?>
        <tr align="center">
            <td><?php echo $arr['id'] ?></td>
            <td><?php echo $arr['name'] ?></td>
            <td><?php echo $arr['gender'] ?></td>
            <td><?php echo $arr['age'] ?></td>
            <td><?php echo $arr['edu'] ?></td>
            <td><?php echo $arr['salary'] ?></td>
            <td><?php echo $arr['bonus'] ?></td>
            <td><?php echo $arr['city'] ?></td>
            <td>
                <a href="">修改</a>|
                <a href="#" onClick="confirmDel(<?php echo $arr['id'] ?>)">删除</a>
            </td>
        </tr>
    <?php } ?>

    <tr>
        <td colspan="9" align="center" height="50" class="pagelist">
            <?php
            // 循环起点 和终点
            $start = $page - 5;
            $end = $page + 4;

            if ($page <= 6) {
                $start = 1;
                $end = 10;
            }

            // 如果$page>=$page - 4
            if ($page >= $pages - 4) {
                $start = $pages - 9;
                $end = $pages;
            }

            // 如果$pages < 10

            if ($pages <= 10) {
                $start = 1;
                $end = $pages;
            }
            // 循环输出所有页码
            for ($i = $start; $i <= $end; $i++) {
                // 当前页不加链接
                if ($page == $i) {
                    echo "<sapn>$i</sapn>";
                } else {
                    echo "<a href='list.php?page=$i'>$i</a>";
                }
            }
            ?>
        </td>
    </tr>
</table>
</body>
</html>
