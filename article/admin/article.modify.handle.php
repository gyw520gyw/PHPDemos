<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/8
 * Time: 14:38
 */

require_once ('../config.php');
require_once('../connect.php');


$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];
$create_time = time();

$sql = "update articletable set title='$title', author='$author',description='$description', content='$content', create_time='$create_time' where id = '$id'";

//echo $sql;

if($conn->query($sql)) {
    echo "<script>alert('修改文章成功!');window.location.href = 'article.manage.php'; </script>";
} else {
    echo "<script>alert('修改文章失败!');window.location.href = 'article.manage.php'; </script>";
}