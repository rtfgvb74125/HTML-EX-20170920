<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/12/20
 * Time: 上午 11:20
 */
session_start();
include("mysql_connect.inc.php");
$actur = $_POST['actur'];
$book = $_POST['book'];
$publish = $_POST['publish'];
$page = $_POST['page'];
$date = $_POST['date'];
$type = $_POST['type'];
$addsql = "INSERT INTO Teacherwork(`autter`,`title`,`publisher`,`page`,`date`,`type`)VALUE ('$actur','$book','$publish','$page','$date','$type');";

echo $addsql;
if($result = $connect->query($addsql)){
    echo "新增成功";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}else{
    echo "新增失敗";
//    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';

}