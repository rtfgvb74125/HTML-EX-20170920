<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2017/12/3
 * Time: 下午 11:05
 */include ("funtion.php");
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
            background-color: #050c15;
            color: #ff6f32;
            padding: 15px;
            font-size: 2em;
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
                <li><a data-toggle="tab" href="#1">97學年度 入學</a></li>
                <li><a data-toggle="tab" href="#2">98學年度 入學</a></li>
                <li><a data-toggle="tab" href="#3">99學年度 入學</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">下拉<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a data-toggle="tab" href="#4">100學年度 入學</a></li>
                        <li><a data-toggle="tab" href="#5">101學年度 入學</a></li>
                    </ul>
                </li>
            </ul>

            <div class="tab-content">
                <div id="1" class="tab-pane fade in active">
                    <table border="2" width="800" align="center" class="table_font_size; table table-responsiv-sm">
                        <tr>
                            <td width="10%" align="center" rowspan="10">資工在職專班</td>
                            <td width="10%" rowspan="2" align="center">耀鴻</td>
                            <td width="80%">以Web2.0的概念建置數學教學法知識庫：應用於偏鄉課輔 (IETAC 2009)</td>
                        </tr>
                        <tr>
                            <td>以維基系統建置國小數學課輔範例庫之研究(碩士論文)</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">美梅</td>
                            <td>使用維基提示法加強國小學童寫作能力之研究 (IETAC 2009)</td>
                        </tr>
                        <tr>
                            <td>使用維基提示法加強國小學童寫作能力之研究(碩士論文)</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">明發</td>
                            <td>提昇手球訓練成效之數位學習網 (AIT 2010)</td>
                        </tr>
                        <tr>
                            <td>建置維基式教學平台輔助國小手球訓練之研究(碩士論文)</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">碧英</td>
                            <td>應用物件導向學習環境與教材進行國小修辭教學之研究 (OOTA 2009)</td>
                        </tr>
                        <tr>
                            <td>應用維基提示法於學童修辭能力之研究(碩士論文)</td>
                        </tr>
                        <tr>
                            <td rowspan="2" align="center">健華</td>
                            <td>建置維基式教學知識庫輔助適性化品格教育之研究 (AIT 2010)</td>
                        </tr>
                        <tr>
                            <td>使用維基式教學資源庫輔助適性化品格教育之研究(碩士論文)</td>
                        </tr>
                    </table>
                </div>
                <div id="2" class="tab-pane fade">
                    <table border="2" width="800" align="center" class="table_font_size ; table table-responsiv-sm">
                        <tr>
                            <td width="10%" rowspan="2">一般生</td>
                            <td width="10%" rowspan="2">聰智</td>
                            <td width="80%">SCORM教材行動檢索方法之研究 (IETAC 2011)</td>
                        </tr>
                        <tr>
                            <td>應用操作式虛擬教具於課後輔導之研究-以國小三年級數學減法單元為例(碩士論文)</td>
                        </tr>
                        <tr>
                            <td rowspan="2">資工在職專班</td>
                            <td rowspan="2">智瑩</td>
                            <td>適用於課輔補救教學之診斷策略研究─以國中數學低成就學生為例 (IETAC 2011)</td>
                        </tr>
                        <tr>
                            <td>應用於課後輔導之診斷測驗與補救教學研究─以一元一次方程式單元為例(碩士論文)</td>
                        </tr>
                    </table>
                </div>
                <div id="3" class="tab-pane fade">
                    <table border="2" width="800" align="center" class="table_font_size ; table table-responsiv-sm">
                        <tr>
                            <td width="10%" align="center" rowspan="7">一般生</td>
                            <td width="10%" align="center" rowspan="2">青瑜</td>
                            <td width="80%">應用Facebook與操作式虛擬教具於課後輔導 之研究-以國小五年級等值分數為例(AIT 2012)</td>
                        </tr>
                        <tr>
                            <td>應用基於認知衝突理論的虛擬教具於課後輔導之研究-以國小四年級則運算單元為例(碩士論文)</td>
                        </tr>
                        <tr>
                            <td align="center" rowspan="3">張傑</td>
                            <td>互動式故事敘說應用於校園霸凌預防之研究(TWELF 2012)</td>
                        </tr>
                        <tr>
                            <td>互動式故事板應用於衝突管理學習之先導型研究 - 以校園霸凌預防為例(GCCCE 2012)</td>
                        </tr>
                        <tr>
                            <td>基於多階段圖的故事敘說動畫製作之研究 -以校園霸凌預防為例(碩士論文)</td>
                        </tr>
                        <tr>
                            <td align="center" rowspan="2">叡孟</td>
                            <td>互動式遊戲應用於霸凌預防情緒管理之研究(GCCCE 2013)</td>
                        </tr>
                        <tr><td>互動式遊戲應用於霸凌預防情緒管理之研究(GCCCE 2013)(碩士論文)</td></tr>
                    </table>
                </div>
                <div id="4" class="tab-pane fade">
                    <table border="2" width="800" align="center" class="table_font_size ; table table-responsiv-sm">
                        <tr>
                            <td width="10%" align="center" rowspan="8">一般生</td>
                            <td width="10%" align="center" rowspan="2">育銘</td>
                            <td width="80%">虛擬教具資源庫之研製－應用於國小數學志工課輔(TWELF 2013)</td>
                        </tr>
                        <tr><td>虛擬教具資源庫之研製－應用於國小數學志工課輔(TWELF 2013)(碩士論文)</td></tr>
                        <tr>
                            <td align="center" rowspan="3">蟬薇</td>
                            <td>應用互動式情境模擬系統於課輔志工訓練之研究：以國小三年級數學減法為例(NCS 2013)</td>
                        </tr>
                        <tr><td>應用互動式情境模擬系統於課輔志工訓練之研究：以國小四則運算為例(AIT 2013)</td></tr>
                        <tr><td>應用互動式情境模擬系統於課輔志工訓練之研究：以國小四則運算為例(AIT 2013)(碩士論文)</td></tr>
                        <tr>
                            <td align="center" rowspan="3">家瑋</td>
                            <td>應用情緒管理遊戲於國中生自傷預防教育之評量：以個人化認知偏誤為例(NCS 2013)</td>
                        </tr>
                        <tr><td>互動遊戲式評量應用於情緒管理之研究(TWELF 2012)</td></tr>
                        <tr><td>互動遊戲式評量應用於情緒管理之研究(TWELF 2012)(碩士論文)</td></tr>
                    </table>
                </div>
                <div id="5" class="tab-pane fade">
                    <table border="2" width="800" align="center" class="table_font_size ; table table-responsiv-sm">
                        <tr>
                            <td width="10%" align="center" rowspan="3">一般生</td>
                            <td width="10%" align="center" rowspan="3">承儒</td>
                            <td width="80%">故事敘說模型應用於國中生情緒管理教學評量之初探(TWELF 2013)</td>
                        </tr>
                        <tr><td>互動式故事敘說應用於自傷預防情緒管理之研究(GCCCE 2013)</td></tr>
                        <tr><td>互動式故事敘說應用於自傷預防情緒管理之研究(GCCCE 2013)(碩士論文)</td></tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-2 sidenav"></div>
    </div>
</div>
</div>
<footer class="container-fluid text-center">
    <p>105021056 @ live.asia.edu.tw</p>
</footer>


</body>
</html>
