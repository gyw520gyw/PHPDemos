<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/8
 * Time: 14:39
 */

require_once ('config.php');

$conn = new mysqli(HOST, USERNAME, PASSWORD, DBNAME);
//检查连接
if($conn->connect_error) {
    die("连接数据库失败! ".$conn->connect_error);
}

if(!$conn->query("set names utf8")) {
    echo "设置字符集错误!";
}

//echo "连接成功!";