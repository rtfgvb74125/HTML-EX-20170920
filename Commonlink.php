<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2017/12/3
 * Time: 下午 11:00
 */
include ("funtion.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>時文中，亞洲大學，網頁</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #3995ff;
            color: #ff6f32;
            padding: 15px;
            font-size: 2em;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://csie.asia.edu.tw/"><img src="http://csie.asia.edu.tw/csie.png" width="30"height="30" border="0"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <?php varbar(8)?>
<!--            <ul class="nav navbar-nav">-->
<!--                <li><a href="index.html">首頁</a></li>-->
<!--                <li><a href="resune.html">簡歷</a></li>-->
<!--                <li><a href="Academic%20service.html">學術服務</a></li>-->
<!--                <li><a href="Administrative%20services.html">行政服務</a></li>-->
<!--                <li><a href="Academic%20Works.html">學術著作</a></li>-->
<!--                <li><a href="Execute.html">執行計畫</a></li>-->
<!--                <li><a href="Postgraduate.html">指導研究生</a></li>-->
<!--                <li class="active"><a href="Commonlink.html">常用連結</a></li>-->
<!--            </ul>-->
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['username'])){
                    echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
                }else {
                    echo '<li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <!--<p><a href="Englishindex.html">English</a></p>-->
            <!--&lt;!&ndash;<p><a href="#">Link</a></p>&ndash;&gt;-->
            <!--&lt;!&ndash;<p><a href="#">Link</a></p>&ndash;&gt;-->
        </div>
        <div class="col-sm-8 text-left">
            <h1><span style="color: #b5ff40">常用連結</span></h1>
            <hr>
            <ul>
                <li><a href="http://dns2.asia.edu.tw/~wjshih/">http://dns2.asia.edu.tw/~wjshih/</a></li>
                <li><a href="http://www.asia.edu.tw/">http://www.asia.edu.tw/</a></li>
                <li><a href="http://csie.asia.edu.tw/">http://csie.asia.edu.tw/</a></li>
                <li><a href="http://moodle.asia.edu.tw/">http://moodle.asia.edu.tw/</a></li>
            </ul>
        </div>
        <div class="col-sm-2 sidenav"></div>
    </div>
</div>
<footer class="container-fluid text-center">
    <p>105021056 @ live.asia.edu.tw</p>
</footer>


</body>
</html>
