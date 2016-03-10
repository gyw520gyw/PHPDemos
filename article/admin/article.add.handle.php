<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/8
 * Time: 14:20
 */
require_once ('../config.php');
require_once('../connect.php');

if (empty($_POST['title'])) {
    echo "<script>alert('标题不能为空'); window.location.href='article.add.php';</script>";
} else {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $desc = $_POST['desc'];
    $content = $_POST['content'];

    $sql = "insert into articletable (title, author, description, content) values ('$title','$author','$desc','$content')";

//    echo $sql;

    if($conn->query($sql)) {
        echo "<script>alert('发布文章成功'); window.location.href='article.manage.php';</script>";
    } else {
        echo "<script>alert('发布文章失败'); window.location.href='article.manage.php';</script>";
    }

}
