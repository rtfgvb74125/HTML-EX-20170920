<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/1/13
 * Time: 下午 02:46
 */
include ("mysql_connect.inc.php");
session_start();
$id = $_POST['id'];
$sql = "delete from Academic where id = '$id'";
if($result = $connect->query($sql)){
    echo  '刪除成功';
    echo'<meta http-equiv=REFRESH CONTENT=2;url=Academic%20service.php>';
}else{
    echo '刪除失敗';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Academic%20service.php>';
}