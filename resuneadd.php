<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2018/1/14
 * Time: 下午 08:50
 */
include ("mysql_connect.inc.php");
session_start();
$num = $_POST['num'];
$title = $_POST['title'];
$type = $_POST['type'];
$sql = "INSERT INTO resume(`num`,`title`,`type`)VALUE ('$num','$title','$type');";
echo $sql;
if($result = $connect->query($sql)){
    echo "新增成功";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=resune.php>';
}else{
    echo "新增失敗";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=resune.php>';
}