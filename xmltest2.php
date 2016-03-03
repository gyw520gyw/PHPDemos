<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/2
 * Time: 16:02
 */

$xmlDoc = new DOMDocument();
$xmlDoc->load("a2.xml");

print $xmlDoc->saveXML()."<br>";


$x = $xmlDoc->documentElement;

foreach($x->childNodes as $item) {
//    echo "<pre>";
//    var_dump($item);
    print $item->nodeName."  ==  ".$item->nodeValue."<br>";

}