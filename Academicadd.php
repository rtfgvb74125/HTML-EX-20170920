<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 2018/1/13
 * Time: 下午 02:45
 */
include ("mysql_connect.inc.php");
session_start();
$title = $_POST['title'];
$date = $_POST['date'];
$type = $_POST['type'];
$sql = "INSERT INTO Academic(`title`,`date`,`type`)VALUE ('$title','$date','$type');";
echo $sql;
if($result = $connect->query($sql)){
    echo "新增成功";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=Academic%20service.php>';
}else{
    echo "新增失敗";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=Academic%20service.php>';

}