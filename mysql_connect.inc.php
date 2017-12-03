<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 11:54
 */
$link = mysqli_connect('localhost','105021056','#5nZBnQx6','105021056');
if(!$link){
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected sucessfully';
mysqli_close($link);?>