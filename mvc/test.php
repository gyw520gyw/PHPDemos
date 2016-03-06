<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/6
 * Time: 16:11
 */
//url形式 index.php?controller=控制器名&method=方法名

require_once ('function.php');

$controllerAllow = array('test', 'index');
$methodAllow = array('test', 'index','show');

$controller = in_array($_GET['controller'], $controllerAllow)?$_GET['controller']:'index';
$method = in_array($_GET['method'], $methodAllow)?$_GET['method']:'index';

//echo $controller;

C($controller,$method);