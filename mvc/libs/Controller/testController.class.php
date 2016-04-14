<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/6
 * Time: 16:06
 */
class testController {
    function show() {
        $model = M('test');
        $data = $model->get();

        $view = V('test');
        $view->display($data);
    }
}
