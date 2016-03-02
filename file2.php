<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/1
 * Time: 11:26
 */

$file = fopen("a1.txt", "r");
while(!feof($file)) {
    echo  fgets($file)."<br>";
}

fclose($file);