<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2018/1/15
 * Time: 上午 11:38
 */
include ("mysql_connect.inc.php");
session_start();
$date = $_POST['date'];
$grade = $_POST['grade'];
$name = $_POST['name'];
$topic1 = $_POST['topic1'];
$topic2 = $_POST['topic2'];
$topic3 = $_POST['topic3'];
$sql = "INSERT INTO Student(`date`,`grade`,`name`,`topic1`,`topic2`,`topic3`)VALUE ('$date','$grade','$name','$topic1','$topic2','$topic3');";
echo $sql;
if($result = $connect->query($sql)){
    echo "新增成功";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=Postgraduate.php>';
}else{
    echo "新增失敗";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=Postgraduate.php>';

}