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
$people = $_POST['people'];
$organ = $_POST['organ'];
$title = $_POST['title'];
$execution = $_POST['execution'];
$money = $_POST['money'];

$sql = "update Project set `date`='$date',`people`='$people',`organ`='$organ',`title`='$title',`execution`='$execution',`money`='$money' where `id`='$id'";
if(mysqli_query($connect,$sql)) {
    echo '修改成功!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Execute.php>';
}
else
{
    echo '修改失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Execute.php>';
}

?>
