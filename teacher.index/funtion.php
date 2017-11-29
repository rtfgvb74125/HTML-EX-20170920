<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 10:12
 */
function varbar($flag){
    ?>
    <ul class="nav navbar-nav">
                <li <?php if($flag==1)echo "class='active'"?>><a href="index.php">首頁</a></li>
                <li <?php if($flag==2)echo "class='active'"?>><a href="resune.php">簡歷</a></li>
                <li><a href="Academic%20service.php">學術服務</a></li>
                <li><a href="Administrative%20services.php">行政服務</a></li>
                <li><a href="Academic%20Works.php">學術著作</a></li>
                <li><a href="Execute.php">執行計畫</a></li>
                <li><a href="Postgraduate.php">指導研究生</a></li>
                <li><a href="Commonlink.php">常用連結</a></li>
            </ul>
   <?php
}
?>

