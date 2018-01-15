<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2017/12/3
 * Time: 下午 11:04
 */
include ("funtion.php");
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
            .table-set{
                font-size: 1em;
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
            <?php varbar(6)?>
<!--            <ul class="nav navbar-nav">-->
<!--                <li><a href="index.html">首頁</a></li>-->
<!--                <li><a href="resune.html">簡歷</a></li>-->
<!--                <li><a href="Academic%20service.html">學術服務</a></li>-->
<!--                <li><a href="Administrative%20services.html">行政服務</a></li>-->
<!--                <li><a href="Academic%20Works.html">學術著作</a></li>-->
<!--                <li class="active"><a href="Execute.html">執行計畫</a></li>-->
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
        <ul class="nav nav-pills nav-stacked col-md-2">
            <li class="active"><a href="#tab_a" data-toggle="pill">科技部計畫(主持人)</a></li>
            <li><a href="#tab_b" data-toggle="pill">國科會大專學生研究計畫(指導教授)</a></li>
            <li><a href="#tab_c" data-toggle="pill">國科會計畫(共同主持人)</a></li>
            <li><a href="#tab_d" data-toggle="pill">產學合作計畫</a></li>
            <?php
            if(isset($_SESSION['username'])){
                echo '<li><a href="#set" data-toggle="pill">新增</a></li>';
            }
            ?>

        </ul>
        <div class="col-sm-8 text-left">
            <h1 style="color: #ff1a1e">執行計畫</h1>
            <hr>


            <div class="tab-content col-md-10">
                <div class="tab-pane active" id="tab_a">
                    <h4>科技部計畫(主持人)</h4>
                    <table class="table-set ; table table-responsiv-sm" border="2" width="850">
                        <tr bgcolor="aqua">
                            <th width="10%" >計畫年度</th>
                            <th width="10%">主持人</th>
                            <th width="30%">執行機關名稱</th>
                            <th width="50%" align="center">內容</th>
                        </tr>
                        <?php
                        $query = "SELECT * FROM `Project` WHERE `type`='0' ";
                        if($result = $connect->query($query)){
                            while ($row = $result->fetch_row()){
                                echo '<form action="ExcuteDelet.php" method="post">';
                                echo '<tr>';
                                echo "<input type='hidden' name='id' value='$row[0]'>";
                                echo '<td>'.$row[1].'</td>';
                                echo '<td>'.$row[2].'</td>';
                                echo '<td>'.$row[3].'</td>';
                                echo '<td>'.$row[4].'<br>'.$row[5].'<br>'.$row[6].'</td>';
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
                <div class="tab-pane" id="tab_b">
                    <h4>國科會大專學生研究計畫(指導教授)</h4>
                    <table class="table-set ; table table-responsiv-sm" border="2" width="850">
                        <tr bgcolor="aqua">
                            <th width="10%" >計畫年度</th>
                            <th width="10%">職務</th>
                            <th width="30%">執行機關名稱</th>
                            <th width="50%" align="center">計畫名稱</th>
                        </tr>
                        <?php
                        $query = "SELECT * FROM `Project` WHERE `type`='1' ";
                        if($result = $connect->query($query)){
                            while ($row = $result->fetch_row()){
                                echo '<form action="ExcuteDelet.php" method="post">';
                                echo '<tr>';
                                echo "<input type='hidden' name='id' value='$row[0]'>";
                                echo '<td>'.$row[1].'</td>';
                                echo '<td>'.$row[2].'</td>';
                                echo '<td>'.$row[3].'</td>';
                                echo '<td>'.$row[4].'<br>'.$row[5].'<br>'.$row[6].'</td>';
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
                <div class="tab-pane" id="tab_c">
                    <h4>國科會計畫(共同主持人)</h4>
                    <table class="table-set ; table table-responsiv-sm" border="2" width="850">
                        <tr bgcolor="aqua">
                            <th width="10%">計畫年度</th>
                            <th width="10%">職務</th>
                            <th width="30%">執行機關名稱</th>
                            <th width="50%">計畫名稱</th>
                        </tr>
                        <?php
                        $query = "SELECT * FROM `Project` WHERE `type`='2' ";
                        if($result = $connect->query($query)){
                            while ($row = $result->fetch_row()){
                                echo '<form action="ExcuteDelet.php" method="post">';
                                echo '<tr>';
                                echo "<input type='hidden' name='id' value='$row[0]'>";
                                echo '<td>'.$row[1].'</td>';
                                echo '<td>'.$row[2].'</td>';
                                echo '<td>'.$row[3].'</td>';
                                echo '<td>'.$row[4].'<br>'.$row[5].'<br>'.$row[6].'</td>';
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
                <div class="tab-pane" id="tab_d">
                    <h4>產學合作計畫</h4>
                    <table class="table-set ; table table-responsiv-sm" border="2" width="850">
                        <tr bgcolor="aqua">
                            <th width="10%">計畫年度</th>
                            <th width="10%">職務</th>
                            <th width="30%">執行機關名稱</th>
                            <th width="50%">計畫名稱</th>
                        </tr>
                        <?php
                        $query = "SELECT * FROM `Project` WHERE `type`='3' ";
                        if($result = $connect->query($query)){
                            while ($row = $result->fetch_row()){
                                echo '<form action="ExcuteDelet.php" method="post">';
                                echo '<tr>';
                                echo "<input type='hidden' name='id' value='$row[0]'>";
                                echo '<td>'.$row[1].'</td>';
                                echo '<td>'.$row[2].'</td>';
                                echo '<td>'.$row[3].'</td>';
                                echo '<td>'.$row[4].'<br>'.$row[5].'<br>'.$row[6].'</td>';
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
                <div class="tab-pane" id="set">
                    <h3>新增</h3>
                    <form action="Excuteadd.php" method="post">
                        <div class="form-group">
                            <label class="col-md-4 control-label" >計畫年度 : </label>
                            <div class="col-md-4">
                                <input  name="date" type="text" placeholder="計畫年度" class="form-control input-md">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 control-label" >職務/主持人 : </label>
                            <div class="col-md-4">
                                <input  name="people" type="text" placeholder="職務/主持人" class="form-control input-md">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 control-label" >執行機關名稱 : </label>
                            <div class="col-md-4">
                                <input  name="organ" type="text" placeholder="執行機關名稱" class="form-control input-md">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 control-label" >計畫名稱 : </label>
                            <div class="col-md-4">
                                <input  name="title" type="text" placeholder="計畫名稱" class="form-control input-md">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 control-label" >執行起迄 : </label>
                            <div class="col-md-4">
                                <input  name="execution" type="text" placeholder="執行起迄" class="form-control input-md">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 control-label" >核定金額 : </label>
                            <div class="col-md-4">
                                <input  name="money" type="text" placeholder="核定金額" class="form-control input-md">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="store">種類</label>
                            <div class="col-md-4">
                                <select  name="type" class="form-control">
                                    <option value="0">科技部計畫(主持人)</option>
                                    <option value="1">國科會大專生研究計畫(指導教授)</option>
                                    <option value="2">國科會計畫(共同主持人)</option>
                                    <option value="3">產學合作計畫</option>
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

<footer class="container-fluid text-center">
    <p>105021056 @ live.asia.edu.tw</p>
</footer>

</body>
</html>

