<!DOCTYPE html>

<?php
require_once('../config.php');
require_once('../connect.php');

$sql = "select * from articletable";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datas[] = $row;
    }
} else {
    $datas = array();
}

//var_dump($datas);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table width="50%" height="50%" border="1">
    <tr>
        <td height="100" colspan="2" bgcolor="#22FFFF00" align="center"><B>后台</B></td>
    </tr>
    <tr>
        <td width="20%" height="500" align="center" valign="top" bgcolor="#22FFFF00">
            <a href="article.add.php">发布文章</a><br>
            <a href="../article.list.php">前台</a>
        </td>
        <td width="80%" valign="top" bgcolor="#FFFFFF">
            <form action="article.add.handle.php" method="post">
                <table width="100%" border="1">
                    <tr>
                        <th>文章编号</th>
                        <th>文章标题</th>
                        <th>操作</th>
                    </tr>

                    <?php
                    if (!empty($datas)) {
                        foreach ($datas as $data) {
                            ?>

                            <tr align="center">
                                <td width="20%">
                                    <?php echo $data['id'] ?>
                                </td>
                                <td>
                                    <?php echo $data['title'] ?>
                                </td>
                                <td width="30%">
                                    <a href="article.del.handle.php?id=<?php echo $data['id']?>">删除</a>
                                   <a href="article.modify.php?id=<?php echo $data['id']?>">修改</a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>

                </table>
            </form>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center" bgcolor="22FFFF00"><b>版权所有 &copy</b></td>
    </tr>

</table>
</body>
</html>