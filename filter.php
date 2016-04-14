<?php
//检测一个数字是否在一个范围内
header("Content-type:text/html; charset=utf8");
$int = "1234";
$option_int = array(
    "options"=>array(
        "min_range"=>1,
        "max_range"=>260
    )
);

if(!filter_var($int, FILTER_VALIDATE_INT, $option_int))
{
    echo("数字是不合法的！");
}
else
{
    echo("数字是合法的！");
}
?>