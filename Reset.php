<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2018/1/8
 * Time: 下午 03:10
 */
include ("mysql_connect.inc.php");
session_start();
$position = $_POST['position'];
$part = $_POST['part'];
$education = $_POST['education'];
$areas = $_POST['areas'];
$expertise = $_POST['expertise'];
$email = $_POST['email'];
$room = $_POST['room'];
$phone = $_POST['phone'];
$ext = $_POST['ext'];
$laboratory	 = $_POST['laboratory'];
$sql = "update Introduction set `position`='$position',`part-time`='$part',`education`='$education',`areas` = '$areas',
        `expertise` = '$expertise',`email` = '$email',`room` = '$room',`phone` = '$phone',`ext` = '$ext',
        `laboratory` = '$laboratory'";
if(mysqli_query($connect,$sql)) {
    echo '修改成功!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
else
{
    echo '修改失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}

?>
