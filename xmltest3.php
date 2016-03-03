<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/2
 * Time: 16:30
 */

$x = simplexml_load_file("a2.xml");
echo $x->getName()."<br>";

foreach($x->children() as $child) {
    echo $child->getName()." == ".$child."<br>";
}