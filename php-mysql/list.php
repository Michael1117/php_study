<?php
// 包含连接数据库的公共文件
require_once("./conn.php");

// 执行查询的SQL  语句

$sql = "SELECT * FROM student ORDER BY id DESC ";

$result = mysqli_query($link, $sql);

$arrs = mysqli_fetch_all($result, MYSQLI_ASSOC);

$records = mysqli_num_rows($result);

echo $records;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>学生信息管理中心</title>
</head>
<body>
    <div style="text-align: center; padding-bottom: 10px">
        <h2>学生信息管理中心 </h2>
        <a href="">添加学生</a>
        <div color="red">共有<b><?php echo $records?></b>个学生信息</div>
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
            <td></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>
