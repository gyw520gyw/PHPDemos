<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/8
 * Time: 14:37
 */
require_once('../config.php');
require_once('../connect.php');

$id = $_GET['id'];

$sql = "delete from articletable where id = '$id'";
if($conn->query($sql)) {
    echo "<script>alert('删除文章成功!');window.location.href = 'article.manage.php'; </script>";
} else {
    echo "<script>alert('删除文章失败!');window.location.href = 'article.manage.php'; </script>";
}