<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/1
 * Time: 16:43
 */

$num = 134;
$min = 1;
$max = 300;

if(filter_var($num, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>$min, "max_range"=>$max)))==false) {
    echo("变量值不在合法范围内");
} else {
    echo("变量值在合法范围内");
}


$str = "<h1>Hello WorldÆØÅ!</h1>";

$newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $newstr;