<!DOCTYPE html>
<?php
require_once ('config.php');
require_once('connect.php');

$sql = "select * from articletable order by create_time desc ;";
$result = $conn->query($sql);
//var_dump($result);
if($result->num_rows > 0) {
    while($rows = $result->fetch_assoc()) {
        $data[] = $rows;
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="default.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <h1><a href="#">ARTICLE<sup></sup></a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="active"><a href="article.list.php">文章</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="page">
    <div id="content">
        <?php
            if(empty($data)) {
                echo "当前没有文章!";
            } else {
                foreach($data as $item) {
        ?>

                    <div class="post"></div>


        <?php
                }
            }
        ?>

    </div>

</div>
</body>

</html>
