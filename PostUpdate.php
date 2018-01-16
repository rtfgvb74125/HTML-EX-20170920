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
$grade = $_POST['grade'];
$name = $_POST['name'];
$topic1 = $_POST['topic1'];
$topic2 = $_POST['topic2'];
$topic3 = $_POST['topic3'];

$sql = "update Student set `date`='$date',`grade`='$grade',`name`='$name',`topic1`='$topic1',`topic2`='$topic2',`topic3`='$topic3' where `id`='$id'";
if(mysqli_query($connect,$sql)) {
    echo '修改成功!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Postgraduate.php>';
}
else
{
    echo '修改失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Postgraduate.php>';
}

?>
