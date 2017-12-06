<?php session_start()?>
<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 11:50
 */
include ("mysql_connect.inc.php");

$email = $_POST['email'];

$passwd = sha1($_POST['passwd']);
;
$sql =  "SELECT * FROM `user` where `id` = '$email'";

$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_row($result);
if($email != null && $passwd != null&& $row[0]==$email && $row[2]==$passwd)
{
    $_SESSION['username'] = $email;
    echo 'success';
    echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';

}else{
    echo 'fail';
    echo $email.$passwd;
    echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
}
?>

