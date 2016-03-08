<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/7
 * Time: 11:11
 */
header('Content-Type:text/html;charset=utf-8');
echo date("Y/m/d") . "<br>";
echo date("Y.m.d") . "<br>";
echo date("Y-m-d")."<br>";


$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
echo "明天是: ".date("Y/m/d", $tomorrow);