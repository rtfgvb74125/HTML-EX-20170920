<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2017/12/3
 * Time: 下午 11:05
 */include ("funtion.php");
 include ('mysql_connect.inc.php');
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
        .table_font_size{
            font-size: 1.25em;
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
            <?php varbar(7)?>
<!--            <ul class="nav navbar-nav">-->
<!--                <li><a href="index.html">首頁</a></li>-->
<!--                <li><a href="resune.html">簡歷</a></li>-->
<!--                <li><a href="Academic%20service.html">學術服務</a></li>-->
<!--                <li><a href="Administrative%20services.html">行政服務</a></li>-->
<!--                <li><a href="Academic%20Works.html">學術著作</a></li>-->
<!--                <li><a href="Execute.html">執行計畫</a></li>-->
<!--                <li class="active"><a href="Postgraduate.html">指導研究生</a></li>-->
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

        </div>
        <div class="col-sm-8 text-left">
            <h1 style="color: #cc1a79">指導研究生</h1>
            <hr>
            <ul class="nav nav-tabs">
                <li><a data-toggle="tab" href="#1">指導研究生</a></li>
                <?php
                if(isset($_SESSION['username'])){
                    echo '<li><a data-toggle="tab" href="#2">新增</a></li>';
                }
                ?>

            </ul>

            <div class="tab-content">
                <div id="1" class="tab-pane fade in active">
                    <table border="2" width="800" align="center" class="table_font_size; table table-responsiv-sm">

                        <?php
                        $query = "SELECT * FROM `Student`";
                        if($result = $connect->query($query)){
                            while ($row = $result->fetch_row()){
                                echo '<tr>';
                                echo '<td width="10%" align="center">'.$row[1].'</td>';
                                echo '<td width="10%" align="center">'.$row[2].'</td>';
                                echo '<td width="10%" align="center">'.$row[3].'</td>';
                                echo '<td width="70%">'.$row[4].'<br>'.$row[5].'<br>'.$row[6].'</td>';
                                echo '<form action="PostUpdateWeb.php" method="post">';
                                echo "<input type='hidden' name='id' value='$row[0]'>";
                                if (isset($_SESSION['username'])){
                                    echo '<td>' . '<button type="submit" class="btn btn-warning ">Update</a></button>' . '</td>';
                                }
                                echo '</form>';
                                echo '<form action="PostDelet.php" method="post">';
                                echo "<input type='hidden' name='id' value='$row[0]'>";
                                if(isset($_SESSION['username'])) {
                                    echo '<td>' . '<button type="submit" class="btn btn-danger">Delete</button>' . '</td>';
                                }
                                echo "</form>";
                                echo '</tr>';

                            }
                        }
                        ?>
                    </table>
                </div>
                <div id="2" class="tab-pane fade">
                   <h3>新增</h3>
                    <form action="Postadd.php" method="post">
                        <div class="form-group">
                            <label class="col-md-4 control-label" >學年度 : </label>
                            <div class="col-md-4">
                                <input  name="date" type="text" placeholder="學年度" class="form-control input-md">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 control-label" >學生身份 : </label>
                            <div class="col-md-4">
                                <input  name="grade" type="text" placeholder="學生身分" class="form-control input-md">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 control-label" >學生姓名 : </label>
                            <div class="col-md-4">
                                <input  name="name" type="text" placeholder="學生姓名" class="form-control input-md">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 control-label" >指導題目一 : </label>
                            <div class="col-md-4">
                                <input  name="topic1" type="text" placeholder="指導題目一" class="form-control input-md">
                            </div>
                        </div>
                        <br>
                        <br><div class="form-group">
                            <label class="col-md-4 control-label" >指導題目二 : </label>
                            <div class="col-md-4">
                                <input  name="topic2" type="text" placeholder="指導題目" class="form-control input-md">
                            </div>
                        </div>
                        <br>
                        <br><div class="form-group">
                            <label class="col-md-4 control-label" >指導題目三 : </label>
                            <div class="col-md-4">
                                <input  name="topic3" type="text" placeholder="指導題目三" class="form-control input-md">
                            </div>
                        </div>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-success">提交</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-2 sidenav"></div>
    </div>
</div>
</div>
<footer class="container-fluid text-center">
    <p>Asia University Power by JiaEn</p>
</footer>


</body>
</html>
