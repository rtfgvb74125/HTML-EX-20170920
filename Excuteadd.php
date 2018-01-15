<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2018/1/14
 * Time: 下午 10:11
 */
include ("mysql_connect.inc.php");
session_start();
$date = $_POST['date'];
$people = $_POST['people'];
$organ = $_POST['organ'];
$title = $_POST['title'];
$execution = $_POST['execution'];
$money = $_POST['money'];
$type = $_POST['type'];
$sql = "INSERT INTO Project(`date`,`people`,`organ`,`title`,`execution`,`money`,`type`)VALUE 
('$date','$people','$organ','$title','$execution','$money','$type');";
echo $sql;
if($result = $connect->query($sql)){
    echo "新增成功";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=Execute.php>';
}else{
    echo "新增失敗";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=Execute.php>';

}