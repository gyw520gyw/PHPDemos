<html lang="en">
<head>
    <meta charset="UTF-8">
</head>

<body>




<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/4
 * Time: 11:04
 *
 * PHP empty()与isset()与is_null()的区别
 */

$a;
$b = false;
$c = '';
$d = 0;
$e = null;
$f = array();


echo "empty: <pre>";
var_dump(empty($a));
var_dump(empty($b));
var_dump(empty($c));
var_dump(empty($d));
var_dump(empty($e));
var_dump(empty($f));


echo "<br/>isset: <pre>";
var_dump(isset($a)); //false
var_dump(isset($b));
var_dump(isset($c));
var_dump(isset($d));
var_dump(isset($e));//false
var_dump(isset($f));

echo "<br/>is_null: <pre>";
var_dump(is_null($a));
var_dump(is_null($b));
var_dump(is_null($c));
var_dump(is_null($d));
var_dump(is_null($e));
var_dump(is_null($f));



echo "-------------输出文件内容--------------<br/>";

$filename = "../a1.txt";
if(!file_exists($filename)) {
    echo "文件不存在。";
} else {
    echo "<pre>".file_get_contents($filename)."</pre>";
}


$a = "123";
$b = "456";

echo "$a"."$b";
echo '$a$b';

?>



</body>

</html>