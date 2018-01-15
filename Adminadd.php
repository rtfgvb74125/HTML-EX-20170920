<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2018/1/14
 * Time: 下午 10:10
 */
include ("mysql_connect.inc.php");
session_start();
$date = $_POST['date'];
$title = $_POST['title'];
$type = $_POST['type'];
$sql = "INSERT INTO Administration(`date`,`title`,`type`)VALUE ('$date','$title','$type');";
echo $sql;
if($result = $connect->query($sql)){
    echo "新增成功";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=Administrative%20services.php>';
}else{
    echo "新增失敗";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=Administrative%20services.php>';

}