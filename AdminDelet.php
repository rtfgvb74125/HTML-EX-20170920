<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2018/1/14
 * Time: 下午 10:10
 */
include ("mysql_connect.inc.php");
session_start();
$id = $_POST['id'];
$sql = "delete from Administration where id = '$id'";
if($result = $connect->query($sql)){
    echo  '刪除成功';
    echo'<meta http-equiv=REFRESH CONTENT=2;url=Administrative%20services.php>';
}else{
    echo '刪除失敗';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Administrative%20services.php>';
}