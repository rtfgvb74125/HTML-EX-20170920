<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2018/1/8
 * Time: 下午 03:10
 */
include ("mysql_connect.inc.php");
session_start();
$id = $_POST['id'];
$date = $_POST['date'];
$title = $_POST['title'];

$sql = "update Administration set `title`='$title',`date`='$date' where `id`='$id'";
if(mysqli_query($connect,$sql)) {
    echo '修改成功!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Administrative%20services.php>';
}
else
{
    echo '修改失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Administrative%20services.php>';
}

?>
