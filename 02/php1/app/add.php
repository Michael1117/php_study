<?php
require_once("./conn.php");

if (isset($_POST['token']) && $_POST['token'] == "add") {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $edu = $_POST['edu'];
    $salary = $_POST['salary'];
    $bonus = $_POST['bonus'];
    $city = $_POST['city'];

    $sql = "INSERT INTO student VALUES(null, '$name','$gender',$age, '$edu', $salary, $bonus, '$city')";

    if (mysqli_query($link, $sql)) {
        echo "<h2>记录添加成功</h2>";
        header("refresh:3;url=./list.php");
        die();

    }
}
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
<div style="text-align: center;padding-bottom: 10px">
    <h2>学生信息管理中心--添加学生</h2>
    <a href="./list.php">返回</a>
</div>

<form action="" method="post">
    <table width="400" bordercolor="#ccc" border="1" rules="all" align="center" cellpadding="5">
        <tr>
            <td width="80" align="right">姓名：</td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td width="80" align="right">性别：</td>
            <td>
                <input type="radio" name="gender" value="男" checked>男
                <input type="radio" name="gender" value="女">女
            </td>
        </tr>
        <tr>
            <td width="80" align="right">年龄：</td>
            <td>
                <input type="text" name="age">
            </td>
        </tr>
        <tr>
            <td width="80" align="学历"></td>
            <td>
                <select name="edu" id="">
                    <option value="1">初中</option>
                    <option value="2">高中</option>
                    <option value="3" selected>大专</option>
                    <option value="4">本科</option>
                    <option value="5">研究生</option>
                </select>
            </td>
        </tr>
        <tr>
            <td width="80" align="right">工资：</td>
            <td>
                <input type="text" name="salary">
            </td>
        </tr>
        <tr>
            <td width="80" align="right">奖金：</td>
            <td>
                <input type="text" name="bonus">
            </td>
        </tr>
        <tr>
            <td width="80" align="right">籍贯：</td>
            <td>
                <input type="text" name="city">
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <input type="submit" value="提交">
                <input type="hidden" name="token" value="add">
                <input type="reset" value="重置">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
    
    