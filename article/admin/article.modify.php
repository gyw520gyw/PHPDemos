<!DOCTYPE html>
<?php
    require_once ('../config.php');
    require_once('../connect.php');

    $id = $_GET['id'];
    $sql = "select * from articletable where id = '$id'";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();

//var_dump( $data);

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
            <a href="article.manage.php">管理文章</a>
        </td>
        <td width="80%" valign="top" bgcolor="#FFFFFF">
            <form action="article.modify.handle.php" method="post">
                <input type="hidden" name="id" value="<?php echo $data['id']?>"/>
                <table width="100%" border="0">
                    <tr>
                        <th colspan="2">修改文章</th>
                    </tr>
                    <tr>
                        <td width="100">标题</td>
                        <td>
                            <input type="text" name="title" id="title" value="<?php echo $data['title']?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td width="100">作者</td>
                        <td>
                            <input type="text" name="author" id="author" value="<?php echo $data['author']?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td width="100">简介</td>
                        <td>
                            <textarea name="description" id="description" cols="60" rows="5"><?php echo $data['description']?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td width="100">内容</td>
                        <td>
                            <textarea name="content" id="content" cols="60" rows="15"><?php echo $data['content']?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="button" value="提交"/></td>
                    </tr>
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