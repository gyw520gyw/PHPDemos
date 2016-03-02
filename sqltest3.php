<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/1
 * Time: 18:22
 */
$servername="localhost";
$dbname="myDBPDO";
$username="root";
$password="";



//$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "insert into MyGuests(firstname, lastname, email) values (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss",$firstname, $lastname, $email);

// 设置参数并执行
$firstname = "Guo";
$lastname = "Yonwei";
$email = "yongwei@example.com";
$stmt->execute();

//$firstname = "Mary";
//$lastname = "Moe";
//$email = "mary@example.com";
//$stmt->execute();
//
//$firstname = "Julie";
//$lastname = "Dooley";
//$email = "julie@example.com";
//$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();