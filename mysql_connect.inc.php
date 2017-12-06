<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 11:54
 */
$db_server = "localhost";
$db_name = "105021056";
$db_user = "105021056";
$db_passwd = "#5nZBnQx6";

$connect= mysqli_connect($db_server,$db_user,$db_passwd,$db_name);

if(!$connect) {
    die("Error:can not connect with data base");
}
$connect->set_charset("utf8");
//mysqli_query("SET NAMES utf8");

?>