<?php
	$servername = "localhost";
	$dbname = "test";
	$username = "root";
	$password = "";
	
	try{
		$conn = new PDO("mysql:host=$servername;dbname=myDBPDO",$username, $password);
//		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//		$sql = "CREATE DATABASE myDBPDO";
//		// 使用 exec() ，因为没有结果返回
//		$conn->exec($sql);
//		echo "Connected successfully <br>";

		$sql_create_table ="CREATE TABLE MyGuests (
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			firstname VARCHAR(30) NOT NULL,
			lastname VARCHAR(30) NOT NULL,
			email VARCHAR(50),
			reg_date TIMESTAMP
		)";

		$conn->exec($sql_create_table);
		echo "ceate table successfully !";

	}
	catch(PDOException $e){
		echo $e->getMessage();
    }
$conn = null;