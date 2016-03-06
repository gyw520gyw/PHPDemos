<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/6
 * Time: 16:24
 */
function C($name, $method) {
    require_once ('/libs/Controller/'.$name.'Controller.class.php');
//  不安全
//    eval('$obj = new '.$name.'Controller();$obj->'.$method.'();');

    $controller = $name.'Controller';
    $obj = new $controller();
    $obj->$method();
}


function M($name) {
    require_once ('/libs/Model/'.$name.'Model.class.php');
//    eval('$obj = new '.$name.'Model();');
    $model = $name.'Model';
    $obj = new $model();
    return $obj;
}

function V($name) {
    require_once ('/libs/View/'.$name.'View.class.php');
    $view = $name.'View';
    $obj = new $view();
    return $obj;
}














