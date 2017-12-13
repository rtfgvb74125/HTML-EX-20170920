<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/12/13
 * Time: 上午 10:54
 */
session_start();
session_unset();
session_destroy();
echo "Logout.......";
echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
?>