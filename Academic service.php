<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2017/12/3
 * Time: 下午 10:57
 */
include ("funtion.php")
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
                <li><a href="../login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
            <div class="container">

                <!-------->
                <div id="content">
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active"><a href="#red" data-toggle="tab">1.國際期刊 編輯委員</a></li>
                        <li><a href="#orange" data-toggle="tab">2.國際期刊 論文審查</a></li>
                        <li><a href="#yellow" data-toggle="tab">3.研討會委員</a></li>
                        <li><a href="#green" data-toggle="tab">4.研討會議程主持人</a></li>
                        <li><a href="#blue" data-toggle="tab">5.外校碩士論文口試委員</a></li>
                    </ul>
                    <div id="my-tab-content" class="tab-content">
                        <div class="tab-pane active" id="red">
                            <ul>
                                <li><span style="font-size: 2em;color: #3845ff">(1) ISRN Education: 2011-2013</span></li>
                                <li><span style="font-size: 2em;color: #3845ff">(2) International Journal of the Academy of Organizational Behavior Management (IJAOBM): 2012-2014</span></li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="orange">
                            <ul>
                                <li><span style="font-size: 2em;color: #3845ff">(1) Computers & Education: 2008, 2009, 2010, 2011</span></li>
                                <li><span style="font-size: 2em;color: #3845ff">(2) Turkish Online Journal of Educational Technology, 2011</span></li>
                                <li><span style="font-size: 2em;color: #3845ff">(3) IEEE’s Transactions on Learning Technologies: 2010, 2013</span></li>
                                <li><span style="font-size: 2em;color: #3845ff">(4) International Journal of Computers and Applications: 2010, 2011</span></li>
                                <li><span style="font-size: 2em;color: #3845ff">(5) Journal of Computing in Higher Education: 2009, 2010</span></li>
                                <li><span style="font-size: 2em;color: #3845ff">(6) Journal of Computer Systems, Networks, and Communications: 2010</span></li>
                                <li><span style="font-size: 2em;color: #3845ff">(7) Journal of Supercomputing: 2010, 2013</span></li>
                                <li><span style="font-size: 2em;color: #3845ff">(8) Journal of Information Science and Engineering: 2009</span></li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="yellow">
                            <ul>
                                <li><span style="font-size: 2em;color: #3845ff">(1) Program Committee: The 9th IFIP International Conference on Network and Parallel Computing (NPC 2012)</span></li>
                                <li><span style="font-size: 2em;color: #3845ff">(2) Finance Co-Chair: IEEE International Symposium on Multimedia (ISM2010)</span></li>
                                <li><span style="font-size: 2em;color: #3845ff">(3) 議程委員：第六屆台灣數位學習發展研討會(Taiwan E-Learning Forum, TWELF2010)</span></li>
                                <li><span style="font-size: 2em;color: #3845ff">(4) 議程副主席：2013全國計算機會議(2013 National Computer Symposium, NCS 2013)</span></li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="green">
                            <ul>
                                <li><span style="font-size: 2em;color: #3845ff">(1) 共同主持人：第六屆台灣數位學習發展研討會(Taiwan E-Learning Forum, TWELF2010)
     Session C: 適性化學習與電腦化測驗與評量(一)</span></li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="blue">
                            <ul>
                                <li><span style="font-size: 2em;color: #3845ff">(1) 東海大學: 2009, 2010, 2011, 2012</span></li>
                                <li><span style="font-size: 2em;color: #3845ff">(2) 彰師大: 2009</span></li>
                            </ul>
                        </div>
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
