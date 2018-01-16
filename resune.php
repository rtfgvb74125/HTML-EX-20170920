<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 10:55
 */
include("funtion.php");
include ('mysql_connect.inc.php');
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
        <link rel="stylesheet" href="css/1.css">
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
            .h1font{
                font-size: 1.5em;
            }
            .h3font{
                font-size: 2em;
            }
            .fontsize{
                font-size: large;
            }
            .coursestyle{
                background: #daa520;
                font-size: large;
                height: 40px;

            }
            .coursestyle2{
                background: #f5deb3;
                font-size: large;
                height: 40px;
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
           <?php varbar(2) ;?>
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

        <ul class="nav nav-pills nav-stacked col-md-2">
<!--            <li class="active"><a href="#tab_a" data-toggle="pill">基本資料</a></li>-->
            <li class="active"><a href="#tab_b" data-toggle="pill">獲獎/Award</a></li>
            <li><a href="#tab_c" data-toggle="pill">授課課程/Course</a></li>
            <li><a href="#tab_d" data-toggle="pill">指導論文/Thesis advising</a></li>
            <?php
            if(isset($_SESSION['username'])){
                echo '<li><a href="#set" data-toggle="pill">新增</a></li>';
            }
            ?>
        </ul>

        <div class="col-sm-8 text-left">
            <h1 style="color: #ff4e35">教學歷程檔案</h1>
            <hr>
            <div class="tab-content col-md-10">
<!--                <div class="tab-pane active" id="tab_a">-->
<!--                    <h2 class="h1font">Welcome</h2>-->
<!--                    <h3 class="h3font">基本資料</h3>-->
<!--                    <ul>-->
<!--                        <li class="fontsize">姓名：時文中／Wen-Chung Shih</li>-->
<!--                        <li class="fontsize">任職單位：資訊工程學系 副教授</li>-->
<!--                        <li class="fontsize">E-mail：wjshih@asia.edu.tw</li>-->
<!--                    </ul>-->
<!--                    <h3 class="h3font">學歷</h3>-->
<!--                    <ul>-->
<!--                        <li class="fontsize">交通大學 資訊科學 博士</li>-->
<!--                    </ul>-->
<!--                    <h3 class="h3font">專長</h3>-->
<!--                    <ul>-->
<!--                        <li class="fontsize">行動與無所不在學習</li>-->
<!--                        <li class="fontsize">平行與分散處理</li>-->
<!--                        <li class="fontsize">數位學習內容</li>-->
<!--                        <li class="fontsize">人工智慧</li>-->
<!--                    </ul>-->
<!--                </div>-->
                <div class="tab-pane active" id="tab_b">
                    <h2 class="h1font">獲獎/Award</h2>
                    <table border="2" width="700">
                        <?php
                        $query = "SELECT * FROM `resume` WHERE `type`='0'";
                        if($result = $connect->query($query)){
                            while($row = $result->fetch_row()){

                                echo '<tr>';
                                echo '<td width="5%">'.$row[1].'</td>';
                                echo '<td width="95%">'.$row[2].'</td>';
                                echo '<form action="resumeUpateWeb.php"method="post">';
                                echo "<input type='hidden' name='id' value='$row[0]'>";
                                if(isset($_SESSION['username'])) {
                                    echo '<td>' . '<button type="submit" class="btn btn-warning ">Update</a></button>' . '</td>';
                                }
                                echo '</form>';
                                echo '<form action="resuneDelet.php" method="post">';
                                echo "<input type='hidden' name='id' value='$row[0]'>";
                                if(isset($_SESSION['username'])) {
                                    echo '<td>' . '<button type="submit" class="btn btn-danger">Delete</button>' . '</td>';
                                }
                                echo "</form>";
                                echo '</tr>';
                            }
                        }
                        echo '</table>';

                        ?>

                </div>
                <div class="tab-pane" id="tab_c">
                    <h2 class="h1font">授課課程/Course</h2>
                    <table border="2" width="700">
                        <?php
                        $query = "SELECT * FROM `resume` WHERE `type`='1'";
                        if($result = $connect->query($query)){
                            while($row = $result->fetch_row()){
                                echo '<tr>';
                                echo '<td width="5%">'.$row[1].'</td>';
                                echo '<td width="95%">'.$row[2].'</td>';
                                echo '<form action="resumeUpateWeb.php"method="post">';
                                echo "<input type='hidden' name='id' value='$row[0]'>";
                                if(isset($_SESSION['username'])) {
                                    echo '<td>' . '<button type="submit" class="btn btn-warning ">Update</a></button>' . '</td>';
                                }
                                echo '</form>';
                                echo '<form action="resuneDelet.php" method="post">';
                                echo "<input type='hidden' name='id' value='$row[0]'>";
                                if(isset($_SESSION['username'])) {
                                    echo '<td>' . '<button type="submit" class="btn btn-danger">Delete</button>' . '</td>';
                                }
                                echo "</form>";
                                echo '</tr>';

                            }
                        }
                        echo '</table>';
                        ?>


                </div>
                <div class="tab-pane" id="tab_d">
                    <h2 class="h1font">指導論文/Thesis advising</h2>
                    <table border="2" width="700">
                        <?php
                        $query = "SELECT * FROM `resume` WHERE `type`='2'";
                        if($result = $connect->query($query)){
                            while($row = $result->fetch_row()){
                                echo '<tr>';
                                echo '<td width="5%">'.$row[1].'</td>';
                                echo '<td width="95%">'.$row[2].'</td>';

                                echo '<form action="resumeUpateWeb.php"method="post">';
                                echo "<input type='hidden' name='id' value='$row[0]'>";
                                if(isset($_SESSION['username'])) {
                                    echo '<td>' . '<button type="submit" class="btn btn-warning ">Update</a></button>' . '</td>';
                                }
                                echo '</form>';
                                echo '<form action="resuneDelet.php" method="post">';
                                echo "<input type='hidden' name='id' value='$row[0]'>";
                                if(isset($_SESSION['username'])) {
                                    echo '<td>' . '<button type="submit" class="btn btn-danger">Delete</button>' . '</td>';
                                }
                                echo "</form>";
                                echo '</tr>';
                            }
                        }
                        echo ' </table>';
                        ?>
                </div>
                <div class="tab-pane" id="set">
                    <h2>新增</h2>
                    <form action="resuneadd.php" method="post">
                        <div class="form-group">
                            <label class="col-md-4 control-label" >Number : </label>
                            <div class="col-md-4">
                                <input  name="num" type="text"  class="form-control input-md">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 control-label" >Title : </label>
                            <div class="col-md-4">
                                <input  name="title" type="text"  class="form-control input-md">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="store">種類</label>
                            <div class="col-md-4">
                                <select  name="type" class="form-control">
                                    <option value="0">獲獎</option>
                                    <option value="1">課程</option>
                                    <option value="2">指導論文</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">提交</button>
                    </form>
                </div>
            </div>

        </div><!-- tab content -->
    </div>

</div>





<footer class="container-fluid text-center">
    <p>105021056 @ live.asia.edu.tw</p>
</footer>

</body>
</html>

