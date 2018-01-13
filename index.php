<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 10:11
 */
session_start();
include("funtion.php");
include ("mysql_connect.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>時文中，亞洲大學，網頁</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css2/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='//fonts.googleapis.com/css?family=Cardo:400italic' rel='stylesheet' type='text/css'><script src="//s3-ap-northeast-1.amazonaws.com/justfont-user-script/jf-53855.js"></script>
    <style>
        .content{
            font-family: "wcl-07";
            font-weight: 700;
        }
        li{
            font-family: "wcl-07";
            font-weight: 700;
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
            ?>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <?php varbar(1); ?>
<!--            <ul class="nav navbar-nav">-->
<!--                <li class="active"><a href="index.html">首頁</a></li>-->
<!--                <li><a href="resune.html">簡歷</a></li>-->
<!--                <li><a href="Academic%20service.html">學術服務</a></li>-->
<!--                <li><a href="Administrative%20services.html">行政服務</a></li>-->
<!--                <li><a href="Academic%20Works.html">學術著作</a></li>-->
<!--                <li><a href="Execute.html">執行計畫</a></li>-->
<!--                <li><a href="Postgraduate.html">指導研究生</a></li>-->
<!--                <li><a href="Commonlink.html">常用連結</a></li>-->
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
            <p><a href="Englishindex.php">English</a></p>
            <!--<p><a href="#">Link</a></p>-->
            <!--<p><a href="#">Link</a></p>-->
        </div>
        <div class="col-sm-8 text-left">
            <h1>時文中</h1>
            <hr>
            <h3>簡介</h3>
            <?php
            $query = "SELECT * FROM `Introduction` ";
            if($result = $connect->query($query)) {
                while ($row = $result->fetch_row()) {
            ?>
            <?php
            if(isset($_SESSION['username'])){
                ?>
                <h4>設定</h4>

                <form action="Reset.php" method = "post" >
                    <div class="form-group">
                        <label class="col-md-2 control-label" >現職 : </label>
                        <div class="col-md-4">
                            <?php
                            echo '<input  name="position" type="text" placeholder= "現職"class="form-control input-md" value="'.$row[0].'">'
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" >兼任 : </label>
                        <div class="col-md-4">
                            <?php
                            echo ' <input  name="part" type="text" placeholder= "兼任"class="form-control input-md" value="'.$row[1].'">'
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" >學歷 : </label>
                        <div class="col-md-4">
                            <?php
                            echo '<input  name="education" type="text" placeholder= "現職"class="form-control input-md" value="'.$row[2].'">'
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" >研究領域 : </label>
                        <div class="col-md-4">
                            <?php
                            echo '<input  name="areas" type="text" placeholder= "研究領域"class="form-control input-md" value="'.$row[3].'">'
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" >研究專長 : </label>
                        <div class="col-md-4">
                            <?php
                            echo '<input  name="expertise" type="text" placeholder= "研究專長"class="form-control input-md" value="'.$row[4].'">'
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" >E-mail : </label>
                        <div class="col-md-4">
                            <?php
                            echo '<input  name="email" type="text" placeholder= "email"class="form-control input-md" value="'.$row[5].'">'
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" >研究室 : </label>
                        <div class="col-md-4">
                            <?php
                            echo '<input  name="room" type="text" placeholder= "研究室"class="form-control input-md" value="'.$row[6].'">'
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" >電話 : </label>
                        <div class="col-md-4">
                            <?php
                            echo '<input  name="phone" type="text" placeholder= "電話"class="form-control input-md" value="'.$row[7].'">'
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" >分機 : </label>
                        <div class="col-md-4">
                            <?php
                            echo '<input  name="ext" type="text" placeholder= "分機"class="form-control input-md" value="'.$row[8].'">'
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label" >實驗室 : </label>
                        <div class="col-md-4">
                            <?php
                            echo '<input  name="laboratory" type="text" placeholder= "實驗室"class="form-control input-md" value="'.$row[9].'">'
                            ?>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">修改</button>
                </form>


                <?php
            }else{
                ?>

<!---->
<!--                <div class="form-group">-->
<!--                    <label class="col-md-2 control-label" >E-mail : </label>-->
<!--                    <div class="col-md-4">-->
<!--                        <input  name="email" type="text" placeholder= "E-mail"class="form-control input-md">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label class="col-md-2 control-label" >研究室 : </label>-->
<!--                    <div class="col-md-4">-->
<!--                        <input  name="room" type="text" placeholder= "研究室"class="form-control input-md">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label class="col-md-2 control-label" >電話 : </label>-->
<!--                    <div class="col-md-4">-->
<!--                        <input  name="phone" type="text" placeholder= "電話"class="form-control input-md">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label class="col-md-2 control-label" >分機 : </label>-->
<!--                    <div class="col-md-4">-->
<!--                        <input  name="ext" type="text" placeholder= "分機"class="form-control input-md">-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label class="col-md-2 control-label" >實驗室 : </label>-->
<!--                    <div class="col-md-4">-->
<!--                        <input  name="laboratory" type="text" placeholder= "實驗室"class="form-control input-md">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <br>-->
<!--                <button type="submit" class="btn btn-success">修改</button>-->
<!--            </form>-->

            <?php
                    echo '<span style="font-size: larger">'.'現職 : ' . $row[0].'</span>';
                    echo '<br>';
                    echo '<span style="font-size: larger">'.'兼任 : '.$row[1].'</span>';
                    echo '<br>';
                    echo '<span style="font-size: larger">'.'學歷 : '.$row[2].'</span>';
                    echo '<br>';
                    echo '<span style="font-size: larger">'.'研究領域 : '.$row[3].'</span>';
                    echo '<br>';
                    echo '<span style="font-size: larger">'.'研究專長 : '.$row[4].'</span>';
                    echo '<br>';
                    echo '<span style="font-size: larger">'.'E-mail : '.$row[5].'</span>';
                    echo '<br>';
                    echo '<span style="font-size: larger">'.'研究室 : '.$row[6].'</span>';
                    echo '<br>';
                    echo '<span style="font-size: larger">'.'電話 : '.$row[7].'</span>';
                    echo '<br>';
                    echo '<span style="font-size: larger">'.'分機 : '.$row[8].'</span>';
                    echo '<br>';
                    echo '<span style="font-size: larger">'.'實驗室 : '.'<a href = "http://kdelab.aim.asia.edu.tw/">'.$row[9].'</a>'.'</span>';

                }
            }
            }
            ?>
<!--            <p>現職：亞洲大學 資訊工程學系 副教授</p>-->
<!--            <p>兼任：亞洲大學資工系系主任</p>-->
<!--            <p>學歷：交通大學 資訊科學與工程研究所 博士</p>-->
<!--            <p>研究領域：數位學習科技</p>-->
<!--            <p>研究專長：知識工程、雲端運算</p>-->
<!--            <p>Email：wjshih@asia.edu.tw or wjshih1@gmail.com </p>-->
<!--            <p>研究室：HB39</p>-->
<!--            <p>電話：04-23323456 分機：20039</p>-->
<!--            <p>實驗室：<a href="http://kdelab.aim.asia.edu.tw/">知識與資料工程實驗室I434B</a></p>-->
        </div>
        <div class="col-sm-2 sidenav">

            <p><img src="http://dns2.asia.edu.tw/~wjshih/seoul_103_1221.png "width="200"height="250"border="0" ></p>
            <p>時文中(首爾，2014)</p>

        </div>
    </div>
</div>
<footer class="container-fluid text-center">
    <p>Asia University Power by JiaEn</p>
</footer>


</body>
</html>
