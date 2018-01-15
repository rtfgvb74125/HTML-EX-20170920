<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2018/1/15
 * Time: 上午 11:38
 */
include ('mysql_connect.inc.php');
session_start();
$id = $_POST['id'];
$sql = "delete from Student where id = '$id'";
if($result = $connect->query($sql)){
    echo  '刪除成功';
    echo'<meta http-equiv=REFRESH CONTENT=2;url=Postgraduate.php>';
}else{
    echo '刪除失敗';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=Postgraduate.php>';
}