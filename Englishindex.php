<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2017/12/3
 * Time: 下午 10:49
 */
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>時文中，亞洲大學，網頁</title>
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='//fonts.googleapis.com/css?family=Cardo:400italic' rel='stylesheet' type='text/css'><script src="//s3-ap-northeast-1.amazonaws.com/justfont-user-script/jf-53855.js"></script>
        <style>
            .content{
                font-family: "wcl-07";
                font-weight: 700;
                font-size: 1.25em;
            }
            li{
                font-family: "wcl-07";
                font-weight: 700;
                font-size: 1.25em;
            }
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
                background-color: #050c15;
                color: #ff6f32;
                padding: 15px;
                font-size: 2em;
                font-family: "wcl-07";
                font-weight: 700;
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
            <?php
            if(isset($_SESSION['username'])){
            echo '<a class="navbar-brand" href=#>控制台</a>';
            }else{
            echo '<a class="navbar-brand" href="http://csie.asia.edu.tw/"><img src="Image/csie.png" width="30"height="30" border="0"></a>';
            }
            ?>        </div>
        <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="nav navbar-nav">
                <li class="active"><a href="Englishindex.php">Home</a></li>
                <li ><a href="resune.php">Resume</a></li>
                <li><a href="Academic%20service.php">Academic service</a></li>
                <li><a href="Administrative%20services.php">Administrative services</a></li>
                <li><a href="Academic%20Works.php">Academic Works</a></li>
                <li><a href="Execute.php">Execute plan</a></li>
                <li><a href="Postgraduate.php">Postgraduate</a></li>
                <li><a href="Commonlink.php">Common links</a></li>
            </ul>
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
            <p><a href="index.php">中文</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Dr. Wen-Chung Shih</h1>
            <hr>
            <h3>Introduction</h3>
            <p>Position          ：Associate Professor</p>
            <p>Customer service  ：Department of Computer Science and Information Engineering Asia University </p>
            <p>Address           ：500 Liufeng Road Wufeng Taichung Taiwan 41354</p>
            <p>TEL               ：+886-4-2332-3456 Ext.20039 </p>
            <p>FAX               ：+886-4-2332-0718</p>
            <p>Room              ：HB39</p>
            <p>Email             ：wjshih@asia.edu.tw</p>
            <p>Education         ：Ph.D, Department of Computer Science, National Chiao Tung University, Taiwan (NCTU, 2008)</p>
            <p>Research Interests：e-Learning Technologies、Knowledge Engineering、Cloud Computing</p>

        </div>
        <div class="col-sm-2 sidenav">
            <p><img src="http://dns2.asia.edu.tw/~wjshih/seoul_103_1221.png "width="200"height="250"border="0" ></p>
            <p>Dr. Wen-Chung Shih(首爾，2014)</p>
        </div>
    </div>
</div>
</div>

<footer class="container-fluid text-center">
    <p>105021056 @ live.asia.edu.tw</p>
</footer>

</body>
</html>

