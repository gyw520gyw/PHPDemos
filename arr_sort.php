<?php
 $numbers=array(4,6,2,22,11);
 rsort($numbers);
 var_dump($numbers);

echo "<br>";

$age=array("Peter"=>"200","Ben"=>"37","Joe"=>"43");
asort($age);

var_dump($age);

echo "<br>";

$age1=array("Aeter"=>"2","Ben"=>"37","Joe"=>"43");
krsort($age1);

var_dump($age1);

 ?> 