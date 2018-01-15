<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2017/12/3
 * Time: 下午 10:58
 */
include ("funtion.php");
include ("mysql_connect.inc.php");
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
                background-color: #020409;
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
            <?php varbar(5)?>
<!--            <ul class="nav navbar-nav">-->
<!--                <li><a href="index.html">首頁</a></li>-->
<!--                <li ><a href="resune.html">簡歷</a></li>-->
<!--                <li><a href="Academic%20service.html">學術服務</a></li>-->
<!--                <li><a href="Administrative%20services.html">行政服務</a></li>-->
<!--                <li class="active"><a href="Academic%20Works.html">學術著作</a></li>-->
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

<div class="container">

    <!-------->
    <div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#red" data-toggle="tab">Ａ. 期刊論文(Journal Papers)</a></li>
            <li><a href="#orange" data-toggle="tab">Ｂ. 國際研討會與專書論文</a></li>
            <li><a href="#yellow" data-toggle="tab">C. 研討會論文(Conference Papers)</a></li>
            <li><a href="#green" data-toggle="tab">D. 中文期刊論文(Chinese Journal Papers)</a></li>
            <li><a href="#blue" data-toggle="tab">E. 國內研討會論文(Conference Papers)</a></li>
            <?php
            if(isset($_SESSION['username'])){
                echo '<li><a href="#set" data-toggle="tab">SetWork</a></li>';
            }
            ?>

        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="red">
                <h1>Ａ. 期刊論文(Journal Papers)</h1>
                <?php
                $query = "SELECT * FROM `Teacherwork` WHERE `type`='0' ";
                if($result = $connect->query($query)){
                    while ($row = $result->fetch_row()){
                        echo $row[1].$row[2].$row[3].$row[5].$row[4];
                        echo '<br>';
                        echo '<br>';
                    }
                }
                ?>
                <br>
                <a href="fpdf1.php"><button type="button" class="btn btn-primary">PDF</button></a>
            </div>
            <div class="tab-pane" id="orange">
                <h1>Ｂ. 國際研討會與專書論文</h1>
                <?php
                $query = "SELECT * FROM `Teacherwork` WHERE `type`='1' ";
                if($result = $connect->query($query)){
                    while ($row = $result->fetch_row()){
                        echo $row[1].$row[2].$row[3].$row[5].$row[4];
                        echo '<br>';
                        echo '<br>';
                    }
                }
                ?>
                <br>
                <a href="fpdf2.php"><button type="button" class="btn btn-primary">PDF</button></a>
            </div>
            <div class="tab-pane" id="yellow">
                <h1>C. 研討會論文(Conference Papers)</h1>
                <?php
                $query = "SELECT * FROM `Teacherwork` WHERE `type`='2' ";
                if($result = $connect->query($query)){
                    while ($row = $result->fetch_row()){
                        echo $row[1].$row[2].$row[3].$row[5].$row[4];
                        echo '<br>';
                        echo '<br>';
                    }
                }
                ?>
                <br>
                <a href="fpdf3.php"><button type="button" class="btn btn-primary">PDF</button></a>
            </div>
            <div class="tab-pane" id="green">
                <h1>D. 中文期刊論文(Chinese Journal Papers)</h1>
                                <?php
                $query = "SELECT * FROM `Teacherwork` WHERE `type`='3' ";
                if($result = $connect->query($query)){
                    while ($row = $result->fetch_row()){
                        echo $row[1].$row[2].$row[3].$row[5].$row[4];
                        echo '<br>';
                        echo '<br>';
                    }
                }
                ?>
                <br>
                <a href="fpdf4.php"><button type="button" class="btn btn-primary">PDF</button></a>
            </div>
            <div class="tab-pane" id="blue">
                <h1>E. 國內研討會論文(Conference Papers)</h1>
                <?php
                $query = "SELECT * FROM `Teacherwork` WHERE `type`='4' ";
                if($result = $connect->query($query)){
                    while ($row = $result->fetch_row()){
                        echo $row[1].$row[2].$row[3].$row[5].$row[4];
                        echo '<br>';
                        echo '<br>';
                    }
                }
                ?>
                <br>
                <a href="fpdf5.php"><button type="button" class="btn btn-primary">PDF</button></a>
            </div>
            <div class="tab-pane" id="set">
                <h1>設定</h1>
                <form action="addsql.php" method="post">

                    <div class="form-group">
                        <label class="col-md-4 control-label" >作者 : </label>
                        <div class="col-md-4">
                             <input  name="actur" type="text" placeholder="作者" class="form-control input-md">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                    <label class="col-md-4 control-label" >書名 : </label>
                    <div class="col-md-4">
                        <input  name="book" type="text" placeholder="書名" class="form-control input-md">
                         </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="col-md-4 control-label" >出版社 : </label>
                        <div class="col-md-4">
                            <input  name="publish" type="text" placeholder="出版社" class="form-control input-md">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="col-md-4 control-label" >頁碼 : </label>
                        <div class="col-md-4">
                            <input  name="page" type="text" placeholder="頁碼" class="form-control input-md">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="col-md-4 control-label" >日期 : </label>
                        <div class="col-md-4">
                            <input  name="date" type="text" placeholder="日期" class="form-control input-md">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="store">種類</label>
                        <div class="col-md-4">
                            <select  name="type" class="form-control">
                                <option value="0">期刊論文</option>
                                <option value="1">國際研討會與專書論文</option>
                                <option value="2">研討會論文</option>
                                <option value="3">中文期刊</option>
                                <option value="4">國內研討會論文</option>
                            </select>
                        </div>
                    </div>


<!--                    作者:<input type="text" name="actur"><br>-->
<!--                    書名:<input type="text" name="book"><br>-->
<!--                    出版社:<input type="text" name="publish"><br>-->
<!--                    頁碼:<input type="text" name="page"><br>-->
<!--                    日期:<input type="text" name="date"><br>-->
<!--                    種類:<select type = "text" name="type">-->
<!--                        <option value="0">期刊論文</option>-->
<!--                        <option value="1">國際研討會與專書論文</option>-->
<!--                        <option value="2">研討會論文</option>-->
<!--                        <option value="3">中文期刊</option>-->
<!--                        <option value="4">國內研討會論文</option>-->
<!--                    </select>-->
                    <br>
                    <button type="submit" class="btn btn-success">提交</button>

                </form>
            </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center">
        <p>Asia University Power by JiaEn</p>
    </footer>

</body>
</html>

