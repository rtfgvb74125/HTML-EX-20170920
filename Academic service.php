<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2017/12/3
 * Time: 下午 10:57
 */
session_start();
include ('mysql_connect.inc.php');
include ("funtion.php");
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
            ?>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <?php varbar(3)?>
<!--            <ul class="nav navbar-nav">-->
<!--                <li><a href="index.html">首頁</a></li>-->
<!--                <li><a href="resune.html">簡歷</a></li>-->
<!--                <li class="active"><a href="Academic%20service.html">學術服務</a></li>-->
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
            <!--<p><a href="Englishindex.html">English</a></p>-->
            <!--&lt;!&ndash;<p><a href="#">Link</a></p>&ndash;&gt;-->
            <!--&lt;!&ndash;<p><a href="#">Link</a></p>&ndash;&gt;-->
        </div>
        <div class="col-sm-8 text-left">
            <h1 style="color: #b051cc">學術服務</h1>
            <hr>


                <!-------->
                <div id="content">
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active"><a href="#red" data-toggle="tab">1.國際期刊 編輯委員</a></li>
                        <li><a href="#orange" data-toggle="tab">2.國際期刊 論文審查</a></li>
                        <li><a href="#yellow" data-toggle="tab">3.研討會委員</a></li>
                        <li><a href="#green" data-toggle="tab">4.研討會議程主持人</a></li>
                        <li><a href="#blue" data-toggle="tab">5.外校碩士論文口試委員</a></li>
                        <?php
                        if(isset($_SESSION['username'])){
                            echo ' <li><a href="#set" data-toggle="tab">新增</a></li>';
                        }
                        ?>
                    </ul>

                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane active" id="red">
                            <table width="800" class="table-set ;table table-responsiv-sm" border="1" style="font-size: 1.5em;color: #0000FF">
                                <?php
                                $query = "SELECT * FROM `Academic` WHERE `type`='0' ";
                                if($result = $connect->query($query)){
                                    while ($row = $result->fetch_row()){
                                        echo '<form action="AcademicDelet.php" method="post">';
                                        echo '<tr>';
                                        echo "<input type='hidden' name='id' value='$row[0]'>";
                                        echo '<td>'.$row[1].'</td>';
                                        echo '<td>'.$row[2].'</td>';
                                        if(isset($_SESSION['username'])) {
                                            echo '<td>' . '<button type="submit" class="btn btn-danger">Delete</button>' . '</td>';
                                        }
                                        echo '</tr>';
                                        echo "</form>";
                                    }
                                }
                                ?>
                            </table>
                        </div>
                        <div class="tab-pane" id="orange">
                            <table width="800" class="table-set ;table table-responsiv-sm" border="1" style="font-size: 1.5em;color: #0000FF">
                                <?php
                                $query = "SELECT * FROM `Academic` WHERE `type`='1' ";
                                if($result = $connect->query($query)){
                                    while ($row = $result->fetch_row()){
                                        echo '<form action="AcademicDelet.php" method="post">';
                                        echo '<tr>';
                                        echo "<input type='hidden' name='id' value='$row[0]'>";
                                        echo '<td>'.$row[1].'</td>';
                                        echo '<td>'.$row[2].'</td>';
                                        if(isset($_SESSION['username'])) {
                                            echo '<td>' . '<button type="submit" class="btn btn-danger">Delete</button>' . '</td>';
                                        }
                                        echo '</tr>';
                                        echo "</form>";
                                    }
                                }
                                ?>
                            </table>
                        </div>
                        <div class="tab-pane" id="yellow">
                            <table width="800" class="table-set ;table table-responsiv-sm" border="1" style="font-size: 1.5em;color: #0000FF">
                                <?php
                                $query = "SELECT * FROM `Academic` WHERE `type`='2' ";
                                if($result = $connect->query($query)){
                                    while ($row = $result->fetch_row()){
                                        echo '<form action="AcademicDelet.php" method="post">';
                                        echo '<tr>';
                                        echo "<input type='hidden' name='id' value='$row[0]'>";
                                        echo '<td>'.$row[1].'</td>';
                                        echo '<td>'.$row[2].'</td>';
                                        if(isset($_SESSION['username'])) {
                                            echo '<td>' . '<button type="submit" class="btn btn-danger">Delete</button>' . '</td>';
                                        }
                                        echo '</tr>';
                                        echo "</form>";
                                    }
                                }
                                ?>
                            </table>
                        </div>
                        <div  class="tab-pane" id="green">
                            <table width="800" class="table-set ;table table-responsiv-sm" border="1" style="font-size: 1.5em;color: #0000FF">
                                <?php
                                $query = "SELECT * FROM `Academic` WHERE `type`='3' ";
                                if($result = $connect->query($query)){
                                    while ($row = $result->fetch_row()){
                                        echo '<form action="AcademicDelet.php" method="post">';
                                        echo '<tr>';
                                        echo "<input type='hidden' name='id' value='$row[0]'>";
                                        echo '<td>'.$row[1].'</td>';
                                        echo '<td>'.$row[2].'</td>';
                                        if(isset($_SESSION['username'])) {
                                            echo '<td>' . '<button type="submit" class="btn btn-danger">Delete</button>' . '</td>';
                                        }
                                        echo '</tr>';
                                        echo "</form>";
                                    }
                                }
                                ?>
                            </table>
                        </div>
                        <div class="tab-pane" id="blue">
                            <table width="800" class="table-set ;table table-responsiv-sm" border="1" style="font-size: 1.5em;color: #0000FF">
                                <?php
                                $query = "SELECT * FROM `Academic` WHERE `type`='4' ";
                                if($result = $connect->query($query)){
                                    while ($row = $result->fetch_row()){
                                        echo '<form action="AcademicDelet.php" method="post">';
                                        echo '<tr>';
                                        echo "<input type='hidden' name='id' value='$row[0]'>";
                                        echo '<td>'.$row[1].'</td>';
                                        echo '<td>'.$row[2].'</td>';
                                        if(isset($_SESSION['username'])) {
                                            echo '<td>' . '<button type="submit" class="btn btn-danger">Delete</button>' . '</td>';
                                        }
                                        echo '</tr>';
                                        echo "</form>";
                                    }
                                }
                                ?>
                            </table>
                        </div>

                        <div class="tab-pane" id = "set">
                            <h2>新增</h2>
                            <form action="Academicadd.php" method="post">

                                <div class="form-group">
                                    <label class="col-md-4 control-label" >標題 : </label>
                                    <div class="col-md-4">
                                        <input  name="title" type="text" placeholder="標題" class="form-control input-md">
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
                                            <option value="0">國際期刊 編輯委員</option>
                                            <option value="1">國際期刊 論文審查</option>
                                            <option value="2">研討會委員</option>
                                            <option value="3">研討會義程主持人</option>
                                            <option value="4">外校碩士論文口試委員</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success">提交</button>

                            </form>
                        </div>
                    </div>
                </div>


        </div>
    </div>
</div>
    <footer class="container-fluid text-center">
        <p>Asia University Power by JiaEn</p>
    </footer>


</body>
</html>
