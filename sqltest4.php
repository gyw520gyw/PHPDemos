<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/2
 * Time: 14:32
 */

$host = "localhost";
$username = "root";
$password = "";
$dbname = "mydbpdo";

$conn = new mysqli($host, $username, $password, $dbname);

$sql = "select * from myguests";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($rows = $result->fetch_assoc()) {
        echo "<pre>";
        echo var_dump($rows)+"<br>";

        echo $rows['firstname']."  ---  ".$rows['lastname'] ."  ---  ". $rows['email']."<br>";
    }

} else {
    echo "0 reslut";
}
$conn->close();