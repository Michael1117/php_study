<?php
require_once('./conn.php');

$id = $_GET['id'];

$sql = "DELETE FROM student WHERE id=$id";

// 执行sql语句

if(mysqli_query($link, $sql)){
    echo "<h2></h2>";
    header("refresh:3;url=./list.php");
    die();
}
    
    