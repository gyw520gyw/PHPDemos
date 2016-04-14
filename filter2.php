<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/1
 * Time: 16:43
 */
header("Content-type:text/html;charset=utf-8");
$num = 134;
$min = 1;
$max = 300;

if(filter_var($num, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>$min, "max_range"=>$max)))==false) {
    echo("变量值不在合法范围内<br>");
} else {
    echo("变量值在合法范围内<br>");
}

$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo("$ip 是一个 IPv6 地址<br>");
} else {
    echo("$ip 不是一个 IPv6 地址<br>");
}


$str = "<h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;