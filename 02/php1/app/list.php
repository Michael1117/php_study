<?php
require_once('./conn.php');

$sql = "SELECT * FROM student ORDER BY id DESC";
$result = mysqli_query($link, $sql);

// 获取所有行数据

$arrs = mysqli_fetch_all($result, MYSQLI_ASSOC);
// 获取学生人数

$records = mysqli_num_rows($result);

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
        function confirmDel(id) {
            if(window.confirm("你真的要删除吗？")) {
                location.href = "./delete.php?id="+id;
            }
        }
    </script>
</head>
<body>
<div style="text-align: center; padding-bottom: 10px;">
    <h2>学生信息管理中心</h2>
    <a href="./add.php">添加学生</a>
    共有 <a href=""><?php echo $records?></a> 个学生信息
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
        <th>操作选项</th>
    </tr>
    <?php
    // 循环二维数组
    foreach ($arrs as $arr) {


    ?>

    <tr align="center">
        <td><?php echo $arr["id"]?></td>
        <td><?php echo $arr["name"]?></td>
        <td><?php echo $arr["gender"]?></td>
        <td><?php echo $arr["age"]?></td>
        <td><?php echo $arr["edu"]?></td>
        <td><?php echo $arr["salary"]?></td>
        <td><?php echo $arr["bonus"]?></td>
        <td><?php echo $arr["city"]?></td>
        <td>
            <a href="">修改</a>
            <a href="#" onclick="confirmDel(<?php echo $arr['id']?>)">删除</a>
        </td>
    </tr>

    <?php }?>
</table>
</body>
</html>