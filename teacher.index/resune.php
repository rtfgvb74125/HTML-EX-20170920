<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 10:55
 */
include("funtion.php");
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
            .h1font{
                font-size: 3em;
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
            <a class="navbar-brand" href="http://csie.asia.edu.tw/"><img src="http://csie.asia.edu.tw/csie.png" width="30"height="30" border="0"></a>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
           <?php varbar(2) ;?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">

        <ul class="nav nav-pills nav-stacked col-md-2">
            <li class="active"><a href="#tab_a" data-toggle="pill">基本資料</a></li>
            <li><a href="#tab_b" data-toggle="pill">獲獎/Award</a></li>
            <li><a href="#tab_c" data-toggle="pill">授課課程/Course</a></li>
            <li><a href="#tab_d" data-toggle="pill">指導論文/Thesis advising</a></li>
        </ul>

        <div class="col-sm-8 text-left">
            <h1 style="color: #ff4e35">教學歷程檔案</h1>
            <hr>
            <div class="tab-content col-md-10">
                <div class="tab-pane active" id="tab_a">
                    <h2 class="h1font">Welcome</h2>
                    <h3 class="h3font">基本資料</h3>
                    <ul>
                        <li class="fontsize">姓名：時文中／Wen-Chung Shih</li>
                        <li class="fontsize">任職單位：資訊工程學系 副教授</li>
                        <li class="fontsize">E-mail：wjshih@asia.edu.tw</li>
                    </ul>
                    <h3 class="h3font">學歷</h3>
                    <ul>
                        <li class="fontsize">交通大學 資訊科學 博士</li>
                    </ul>
                    <h3 class="h3font">專長</h3>
                    <ul>
                        <li class="fontsize">行動與無所不在學習</li>
                        <li class="fontsize">平行與分散處理</li>
                        <li class="fontsize">數位學習內容</li>
                        <li class="fontsize">人工智慧</li>
                    </ul>
                </div>
                <div class="tab-pane" id="tab_b">
                    <h2 class="h1font">獲獎/Award</h2>
                    <table border="2" width="700">
                        <tr bgcolor="#daa520" class="fontsize">
                            <td width="10%" align="center" height="40">1.</td>
                            <td width="90%" >國科會103年度補助『大專校院獎勵特殊優秀人才措施』，國科會，2014.08.1</td>
                        </tr>
                        <tr bgcolor="#f5deb3" class="fontsize">
                            <td align="center" height="40">2.</td>
                            <td >國科會102年度補助『大專校院獎勵特殊優秀人才措施』，國科會，2013.08.1</td>
                        </tr>
                        <tr bgcolor="#daa520" class="fontsize">
                            <td width="10%" align="center" height="40">3.</td>
                            <td width="90%" >國科會101年度補助『大專校院獎勵特殊優秀人才措施』，國科會，2012.08.1</td>
                        </tr>
                        <tr bgcolor="#f5deb3"class="fontsize">
                            <td  align="center" height="40">4.</td>
                            <td  >國科會100年度補助『優秀年輕學者研究計畫』(二年期計畫)，國科會，2011.08.1</td>
                        </tr>
                        <tr bgcolor="#daa520" class="fontsize">
                            <td  align="center" height="40">5.</td>
                            <td  >98學年度校級優良導師，本校，2011.03.19</td>
                        </tr>
                    </table>
                </div>
                <div class="tab-pane" id="tab_c">
                    <h2 class="h1font">授課課程/Course</h2>
                    <nav class="nav navbar-default">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav">
                                <li><a data-toggle="tab" href="#10">1~10</a></li>
                                <li><a data-toggle="tab" href="#20">11~20</a></li>
                                <li><a data-toggle="tab" href="#30">21~30</a></li>
                                <li><a data-toggle="tab" href="#40">31~40</a></li>
                                <li><a data-toggle="tab" href="#50">41~50</a></li>
                                <li><a data-toggle="tab" href="#60">50~60</a></li>
                                <li><a data-toggle="tab" href="#70">61~70</a></li>
                                <li><a data-toggle="tab" href="#80">71~80</a></li>
                                <li><a data-toggle="tab" href="#90">81~90</a></li>
                                <li><a data-toggle="tab" href="#100">91~100</a></li>
                                <li><a data-toggle="tab" href="#110">101~110</a></li>
                                <li><a data-toggle="tab" href="#120">111~120</a></li>
                                <li><a data-toggle="tab" href="#130">121~130</a></li>
                                <li><a data-toggle="tab" href="#140">131~140</a></li>

                            </ul>
                        </div>
                    </nav>
                    <div class="tab-content">
                        <div id="10" class="tab-pane fade in active">
                            <h3>1~10</h3>
                            <table border="1"width="700">
                                <tr class="coursestyle">
                                    <td width="10%" align="center">1.</td>
                                    <td width="90%"><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=INU00096&mCos_Class=A&mSmtr=1061">(大學日間部 )行動學習【第106學年第1學期：A班】
                                            了解行動學習的基本觀念，並能應用於行動學習教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">2.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=ES300157&mCos_Class=A&mSmtr=1061">(大學日間部 )數位教學設計【第106學年第1學期：A班】
                                            了解數位教學設計相關的基本觀念，並能應用於數位教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">3.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=ES300124&mCos_Class=A&mSmtr=1061">	(大學日間部 )數位學習概論【第106學年第1學期：A班】
                                            了解數位學習相關的基本觀念。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">4.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE400028&mCos_Class=A&mSmtr=1061">(碩士在職專班 )碩士論文【第106學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">5.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320057&mCos_Class=A&mSmtr=1061">(大學日間部 )畢業專題(二)【第106學年第1學期：A班】
                                            探討資工領域方面的專題研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">6.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310057&mCos_Class=A&mSmtr=1061">(大學日間部 )畢業專題(二)【第106學年第1學期：A班】
                                            探討資工領域方面的專題研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">7.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE300047&mCos_Class=A&mSmtr=1061">(大學日間部 )資工教學實務課程(五)【第106學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">8.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE300003&mCos_Class=A&mSmtr=1061">(大學日間部 )學輔時間(四)【第106學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">9.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE200046&mCos_Class=A&mSmtr=1061">(研究所碩士班 )碩士論文【第106學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">10.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE100009&mCos_Class=A&mSmtr=1061">(研究所博士班 )博士論文【第106學年第1學期：A班】</a></td>
                                </tr>
                            </table>
                        </div>
                        <div id="20" class="tab-pane fade">
                            <h3>11~20</h3>
                            <table border="1" width="700">
                                <tr class="coursestyle">
                                    <td align="center" width="10%">11.</td>
                                    <td width="90%"><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=INU00092&mCos_Class=A&mSmtr=1052">(大學日間部 )學輔時間(四)【第105學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">12.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=INU00050&mCos_Class=A&mSmtr=1052">(大學日間部 )多媒體數位學習【第105學年第2學期：A班】
                                            了解多媒體與數位學習的基本觀念，並能應用於數位教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">13.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=ES300181&mCos_Class=A&mSmtr=1052">(大學日間部 )數位教材設計與製作【第105學年第2學期：A班】
                                            了解數位教學設計相關的基本觀念，並能應用於數位教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">14.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=ES300158&mCos_Class=A&mSmtr=1052">(大學日間部 )數位學習系統實務【第105學年第2學期：A班】
                                            (1)了解數位學習基本觀念； (2)了解數位學習系統實務技術。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">15.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE400028&mCos_Class=A&mSmtr=1052">(碩士在職專班 )碩士論文【第105學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">16.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320057&mCos_Class=A&mSmtr=1052">(大學日間部 )畢業專題(二)【第105學年第2學期：A班】
                                            探討資工領域方面的專題研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">17.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310056&mCos_Class=A&mSmtr=1052">(大學日間部 )畢業專題(一)【第105學年第2學期：A班】
                                            探討資工領域方面的專題研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">18.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE300009&mCos_Class=A&mSmtr=1052">(大學日間部 )資工教學實務課程(四)【第105學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">19.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE300003&mCos_Class=A&mSmtr=1052">(大學日間部 )學輔時間(四)【第105學年第2學期：A班</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">20.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE200201&mCos_Class=A&mSmtr=1052">(研究所碩士班 )實務實習【第105學年第2學期：A班】
                                            協助系上學生了解未來的相關工作發展及實務、技能。</a></td>
                                </tr>
                            </table>
                        </div>
                        <div id="30" class="tab-pane fade">
                            <h3>21~30</h3>
                            <table border="1" width="700">
                                <tr class="coursestyle">
                                    <td align="center" width="10%">21.</td>
                                    <td width="90%"><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE200046&mCos_Class=A&mSmtr=1052">(研究所碩士班 )碩士論文【第105學年第2學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">22.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE100009&mCos_Class=A&mSmtr=1052">(研究所博士班 )博士論文【第105學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">23.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=INU00092&mCos_Class=A&mSmtr=1051">(大學日間部 )學輔時間(四)【第105學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">24.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=INU00049&mCos_Class=A&mSmtr=1051">(大學日間部 )U化學習【第105學年第1學期：A班】
                                            了解U化學習的基本觀念，並能應用於U化學習教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">25.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=INU00045&mCos_Class=A&mSmtr=1051">(大學日間部 )數位教學設計【第105學年第1學期：A班】
                                            了解數位教學設計相關的基本觀念，並能應用於數位教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">26.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=ES300124&mCos_Class=A&mSmtr=1051">(大學日間部 )數位學習概論【第105學年第1學期：A班】
                                            了解數位學習相關的基本觀念。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">27.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE400028&mCos_Class=A&mSmtr=1051">(碩士在職專班 )碩士論文【第105學年第1學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">28.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320984&mCos_Class=A&mSmtr=1051">(大學日間部 )產業實務實習(一) (3+1分流)【第105學年第1學期：A班】
                                            協助系上學生了解未來的相關工作發展及實務、技能。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">29.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320982&mCos_Class=A&mSmtr=1051">(大學日間部 )產業學習(一) (3+1分流)【第105學年第1學期：A班】
                                            協助系上學生了解未來的相關工作發展及實務、技能。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">30.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320980&mCos_Class=A&mSmtr=1051">(大學日間部 )產業服務(一) (3+1分流)【第105學年第1學期：A班】
                                            協助系上學生了解未來的相關工作發展及實務、技能。</a></td>
                                </tr>
                            </table>
                        </div>
                        <div id="40" class="tab-pane fade">
                            <h3>31~40</h3>
                            <table border="1" width="700">
                                <tr class="coursestyle">
                                    <td align="center" width="10%">31.</td>
                                    <td width="90%"><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320978&mCos_Class=A&mSmtr=1051">(大學日間部 )產業專題實作(3+1分流)【第105學年第1學期：A班】
                                            協助系上學生了解未來的相關工作發展及實務、技能。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">32.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310057&mCos_Class=B&mSmtr=1051">(大學日間部 )畢業專題(二)【第105學年第1學期：B班】
                                            探討資工領域方面的專題研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">33.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310057&mCos_Class=A&mSmtr=1051">(大學日間部 )畢業專題(二)【第105學年第1學期：A班】
                                            探討資工領域方面的專題研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">34.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE300006&mCos_Class=A&mSmtr=1051">(大學日間部 )資工教學實務課程(三)【第105學年第1學期：A班】
                                            落實時理論與實務之應用，增加學生實務經驗。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">35.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE300003&mCos_Class=A&mSmtr=1051">(大學日間部 )學輔時間(四)【第105學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">36.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE200046&mCos_Class=A&mSmtr=1051">(研究所碩士班 )碩士論文【第105學年第1學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">37.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE100009&mCos_Class=A&mSmtr=1051">(研究所博士班 )博士論文【第105學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">38.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=INU00091&mCos_Class=A&mSmtr=1042">(大學日間部 )學輔時間(三)【第104學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">39.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=INU00050&mCos_Class=A&mSmtr=1042">(大學日間部 )多媒體數位學習【第104學年第2學期：A班】
                                            了解多媒體與數位學習的基本觀念，並能應用於數位教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">40.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=INU00047&mCos_Class=A&mSmtr=1042">(大學日間部 )數位學習系統實務【第104學年第2學期：A班】
                                            (1)了解數位學習基本觀念； (2)了解數位學習系統實務技術。</a></td>
                                </tr>
                            </table>
                        </div>
                        <div id="50" class="tab-pane fade">
                            <h3>41~50</h3>
                            <table border="1" width="700">
                                <tr class="coursestyle">
                                    <td align="center" width="10%">41.</td>
                                    <td width="90%"><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE400028&mCos_Class=B&mSmtr=1042">(碩士在職專班 )碩士論文【第104學年第2學期：B班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">42.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE400028&mCos_Class=A&mSmtr=1042">(碩士在職專班 )碩士論文【第104學年第2學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">43.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320056&mCos_Class=A&mSmtr=1042">(大學日間部 )畢業專題(一)【第104學年第2學期：A班】
                                            探討資工領域方面的專題研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">44.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310057&mCos_Class=A&mSmtr=1042">(大學日間部 )畢業專題(二)【第104學年第2學期：A班】
                                            探討資工領域方面的專題研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">45.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310056&mCos_Class=A&mSmtr=1042">(大學日間部 )畢業專題(一)【第104學年第2學期：A班】
                                            探討資工領域方面的專題研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">46.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE300005&mCos_Class=A&mSmtr=1042">(大學日間部 )資工教學實務課程(二)【第104學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">47.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE300003&mCos_Class=A&mSmtr=1042">(大學日間部 )學輔時間(四)【第104學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">48.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE200200&mCos_Class=A&mSmtr=1042">(研究所碩士班 )碩士論文【第104學年第2學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">49.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE200046&mCos_Class=A&mSmtr=1042">(研究所碩士班 )碩士論文【第104學年第2學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">50.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE100011&mCos_Class=A&mSmtr=1042">(研究所博士班 )博士論文【第104學年第2學期：A班】</a></td>
                                </tr>
                            </table>
                        </div>
                        <div id="60" class="tab-pane fade">
                            <h3>51~60</h3>
                            <table border="1" width="700">
                                <tr class="coursestyle">
                                    <td align="center" width="10%">51.</td>
                                    <td width="90%"><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE100010&mCos_Class=A&mSmtr=1042">(研究所博士班 )博士論文【第104學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">52.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE100009&mCos_Class=A&mSmtr=1042">(研究所博士班 )博士論文【第104學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">53.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=INU00091&mCos_Class=A&mSmtr=1041">(大學日間部 )學輔時間(三)【第104學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">54.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=INU00049&mCos_Class=A&mSmtr=1041">(大學日間部 )U化學習【第104學年第1學期：A班】
                                            了解U化學習的基本觀念，並能應用於U化學習教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">55.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=INU00045&mCos_Class=A&mSmtr=1041">(大學日間部 )數位教學設計【第104學年第1學期：A班】
                                            了解數位教學設計相關的基本觀念，並能應用於數位教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">56.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=INU00044&mCos_Class=A&mSmtr=1041">(大學日間部 )數位學習概論【第104學年第1學期：A班】
                                            了解數位學習相關的基本觀念。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">57.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE400121&mCos_Class=A&mSmtr=1041">(碩士在職專班 )碩士論文【第104學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">58.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE400028&mCos_Class=A&mSmtr=1041">(碩士在職專班 )碩士論文【第104學年第1學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">59.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE320057&mCos_Class=A&mSmtr=1041">(大學日間部 )畢業專題(二)【第104學年第1學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">60.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE310057&mCos_Class=A&mSmtr=1041">(大學日間部 )畢業專題(二)【第104學年第1學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                            </table>
                        </div>
                        <div id="70" class="tab-pane fade">
                            <h3>61~70</h3>
                            <table border="1" width="700">
                                <tr class="coursestyle">
                                    <td align="center" width="10%">61.</td>
                                    <td width="90%"><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE300004&mCos_Class=A&mSmtr=1041">(大學日間部 )資工教學實務課程(一)【第104學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">62.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE300003&mCos_Class=A&mSmtr=1041">(大學日間部 )學輔時間(四)【第104學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">63.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE200046&mCos_Class=A&mSmtr=1041">(研究所碩士班 )碩士論文【第104學年第1學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">64.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE100011&mCos_Class=A&mSmtr=1041">(研究所博士班 )博士論文【第104學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">65.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=EE100009&mCos_Class=A&mSmtr=1041">(研究所博士班 )博士論文【第104學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">66.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00056&mCos_Class=A&mSmtr=1032">(大學日間部 )畢業專題(一)【第103學年第2學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">67.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I2U00057&mCos_Class=A&mSmtr=1032">(大學日間部 )畢業專題(二)【第103學年第2學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">68.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I2U00056&mCos_Class=A&mSmtr=1032">(大學日間部 )畢業專題(一)【第103學年第2學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">69.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=GRG00093&mCos_Class=M&mSmtr=1032">(大學日間部 )資訊與科技【第103學年第2學期：M班】
                                            了解資訊科技相關的基本觀念。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">70.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=67D00011&mCos_Class=A&mSmtr=1032">(研究所博士班 )博士論文【第103學年第2學期：A班】</a></td>
                                </tr>
                            </table>
                        </div>
                        <div id="80" class="tab-pane fade">
                            <h3>71~80</h3>
                            <table border="1" width="700">
                                <tr class="coursestyle">
                                    <td align="center" width="10%">71.</td>
                                    <td width="90%"><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=67D00010&mCos_Class=A&mSmtr=1032">(研究所博士班 )博士論文【第103學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">72.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=67D00009&mCos_Class=A&mSmtr=1032">(研究所博士班 )博士論文【第103學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">73.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=66E00028&mCos_Class=A&mSmtr=1032">(碩士在職專班 )碩士論文【第103學年第2學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">74.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=65M00203&mCos_Class=A&mSmtr=1032">(研究所碩士班 )碩士論文【第103學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">75.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=65M00200&mCos_Class=A&mSmtr=1032">(研究所碩士班 )碩士論文【第103學年第2學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">76.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=65M00046&mCos_Class=A&mSmtr=1032">(研究所碩士班 )碩士論文【第103學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">77.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=64U00309&mCos_Class=A&mSmtr=1032">(大學日間部 )學輔時間(四)【第103學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">78.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00090&mCos_Class=A&mSmtr=1032">(大學日間部 )學輔時間(二)【第103學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">79.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00050&mCos_Class=A&mSmtr=1032">(大學日間部 )多媒體數位學習【第103學年第2學期：A班】
                                            了解多媒體與數位學習的基本觀念，並能應用於數位教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">80.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00047&mCos_Class=A&mSmtr=1032">(大學日間部 )數位學習系統實務【第103學年第2學期：A班】
                                            (1)了解數位學習基本觀念； (2)了解數位學習系統實務技術。</a></td>
                                </tr>
                            </table>
                        </div>
                        <div id="90" class="tab-pane fade">
                            <h3>81~90</h3>
                            <table border="1" width="700">
                                <tr class="coursestyle">
                                    <td align="center" width="10%">81.</td>
                                    <td width="90%"><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I3U00057&mCos_Class=A&mSmtr=1031">(大學日間部 )畢業專題(二)【第103學年第1學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">82.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=I2U00057&mCos_Class=A&mSmtr=1031">(大學日間部 )畢業專題(二)【第103學年第1學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">83.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=67D00011&mCos_Class=A&mSmtr=1031">(研究所博士班 )博士論文【第103學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">84.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=67D00009&mCos_Class=A&mSmtr=1031">(研究所博士班 )博士論文【第103學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">85.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=66E00121&mCos_Class=A&mSmtr=1031">(碩士在職專班 )碩士論文【第103學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">86.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=66E00028&mCos_Class=A&mSmtr=1031">(碩士在職專班 )碩士論文【第103學年第1學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">87.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=65M00200&mCos_Class=A&mSmtr=1031">(研究所碩士班 )碩士論文【第103學年第1學期：A班】
                                            探討資工領域方面的研究技巧</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">88.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=64U00309&mCos_Class=A&mSmtr=1031">(大學日間部 )學輔時間(四)【第103學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">89.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00090&mCos_Class=A&mSmtr=1031">(大學日間部 )學輔時間(二)【第103學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">90.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00049&mCos_Class=A&mSmtr=1031">(大學日間部 )U化學習【第103學年第1學期：A班】
                                            了解U化學習的基本觀念，並能應用於U化學習教材的設計。</a></td>
                                </tr>
                            </table>
                        </div>
                        <div id="100" class="tab-pane fade">
                            <h3>91~100</h3>
                            <table border="1" width="700">
                                <tr class="coursestyle">
                                    <td align="center" width="10%">91.</td>
                                    <td width="90%"><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00045&mCos_Class=A&mSmtr=1031">(大學日間部 )數位教學設計【第103學年第1學期：A班】
                                            了解數位教學設計相關的基本觀念，並能應用於數位教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">92.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00044&mCos_Class=A&mSmtr=1031">(大學日間部 )數位學習概論【第103學年第1學期：A班】
                                            了解數位學習相關的基本觀念。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">93.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00089&mCos_Class=A&mSmtr=1022">(大學日間部 )學輔時間(一)【第102學年第2學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">94.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00050&mCos_Class=A&mSmtr=1022">(大學日間部 )多媒體數位學習【第102學年第2學期：A班】
                                            了解多媒體與數位學習的基本觀念，並能應用於數位教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">95.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00047&mCos_Class=A&mSmtr=1022">(大學日間部 )數位學習系統實務【第102學年第2學期：A班】
                                            (1)了解數位學習基本觀念； (2)了解數位學習系統實務技術。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">96.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00020&mCos_Class=A&mSmtr=1022">(大學日間部 )多媒體導論【第102學年第2學期：A班】
                                            教育同學正確的資訊多媒體使用概念，並且教授多媒體科技基本原理以及與日常生活相關的應用。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">97.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00089&mCos_Class=A&mSmtr=1021">(大學日間部 )學輔時間(一)【第102學年第1學期：A班】</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">98.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00049&mCos_Class=A&mSmtr=1021">(大學日間部 )U化學習【第102學年第1學期：A班】
                                            了解U化學習的基本觀念，並能應用於U化學習教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">99.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00045&mCos_Class=A&mSmtr=1021">(大學日間部 )數位教學設計【第102學年第1學期：A班】
                                            了解數位教學設計相關的基本觀念，並能應用於數位教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">100.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00044&mCos_Class=A&mSmtr=1021">(大學日間部 )數位學習概論【第102學年第1學期：A班】
                                            了解數位學習相關的基本觀念。</a></td>
                                </tr>
                            </table>
                        </div>
                        <div id="110" class="tab-pane fade">
                            <h3>101~110</h3>
                            <table border="1" width="700">
                                <tr class="coursestyle">
                                    <td align="center" width="10%">101.</td>
                                    <td width="90%"><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00007&mCos_Class=A&mSmtr=1021">(大學日間部 )資訊與生活【第102學年第1學期：A班】
                                            使學生理解電腦技術的演進及基本電腦技能</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">102.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=GRG00093&mCos_Class=E&mSmtr=1012">(大學日間部 )資訊與科技【第101學年第2學期：E班】
                                            了解資訊科技相關的基本觀念。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">103.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=GRG00092&mCos_Class=K&mSmtr=1012">(大學日間部 )資訊與生活【第101學年第2學期：K班】
                                            了解資訊科技相關的基本觀念。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">104.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00050&mCos_Class=A&mSmtr=1012">(大學日間部 )多媒體數位學習【第101學年第2學期：A班】
                                            了解多媒體與數位學習的基本觀念，並能應用於數位教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">105.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00047&mCos_Class=A&mSmtr=1012">(大學日間部 )數位學習系統實務【第101學年第2學期：A班】
                                            (1)了解數位學習基本觀念； (2)了解數位學習系統實務技術。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">106.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00049&mCos_Class=A&mSmtr=1011">(大學日間部 )U化學習【第101學年第1學期：A班】
                                            了解U化學習的基本觀念，並能應用於U化學習教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">107.</td>
                                    <td><a href="http://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00045&mCos_Class=A&mSmtr=1011">(大學日間部 )數位教學設計【第101學年第1學期：A班】
                                            了解數位教學設計相關的基本觀念，並能應用於數位教材的設計。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">108.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00044&mCos_Class=A&mSmtr=1011">(大學日間部 )數位學習概論【第101學年第1學期：A班】
                                            了解數位學習相關的基本觀念。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">109.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00047&mCos_Class=A&mSmtr=1002">(大學日間部 )數位學習系統實務【第100學年第2學期：A班】
                                            1.了解數位學習基本觀念 2.了解數位學習系統實務技術 3.了解專題製作技術</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">110.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=49U00132&mCos_Class=A&mSmtr=1002">(大學日間部 )多媒體數位學習【第100學年第2學期：A班】
                                            了解多媒體數位學習基本觀念</a></td>
                                </tr>
                            </table>
                        </div>
                        <div id="120" class="tab-pane fade">
                            <h3>111~120</h3>
                            <table border="1" width="700">
                                <tr class="coursestyle">
                                    <td align="center" width="10%">111.</td>
                                    <td width="90%"><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00045&mCos_Class=A&mSmtr=1001">(大學日間部 )數位教學設計【第100學年第1學期：A班】
                                            了解數位教學設計基本觀念 具備考取數位學習證照能力</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">112.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00044&mCos_Class=A&mSmtr=1001">(大學日間部 )數位學習概論【第100學年第1學期：A班】
                                            了解數位學習基本觀念與學習科技學程規劃</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">113.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=49U00127&mCos_Class=A&mSmtr=1001">(大學日間部 )U化學習【第100學年第1學期：A班】
                                            1.了解U化學習基本觀念 2.了解U化學習系統實務技術</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">114.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=52U00020&mCos_Class=A&mSmtr=0992">(大學日間部 )多媒體導論【第099學年第2學期：A班】
                                            1.認識多媒體的基本概念 2.認識多媒體的資料形態及色彩模型 3.瞭解多媒體的基本處理方法及技術 4.認識多媒體在數位學習的應用</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">115.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline_S2.asp?mCos_id=49U00158&mCos_Class=A&mSmtr=0992">(大學日間部 )數位學習系統實務【第099學年第2學期：A班】
                                            1.了解數位學習基本觀念 2.了解數位學習系統實務技術 3.了解專題製作技術</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">116.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=79M00050&mCos_Class=A&mSmtr=0991">(研究所碩士班 )高等數位學習【第099學年第1學期：A班】
                                            1.了解數位學習基本觀念 2.具備考取數位學習證照能力 3.本課程探討數位學習研究的現況,透過相關文獻研討的方式,讓同學學習e-learning論文研讀方法與論文寫作方法.</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">117.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=52U00044&mCos_Class=A&mSmtr=0991">(大學日間部 )數位學習概論【第099學年第1學期：A班】
                                            1.了解數位學習基本觀念 2.具備考取數位學習證照能力 3.學習大三專題製作技術 4.有助於資訊教育相關研究所升學考試</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">118.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=49U00005&mCos_Class=A&mSmtr=0991">(大學日間部 )人工智慧與專家系統【第099學年第1學期：A班】
                                            本課程主要是從代理人(agent)的基本概念講解,使學生認識人工智慧之基本觀念,並教導學生認識與使用專家系統的建置工具-JESS,並使學生能實際了解目前專家系統的應用狀況。 1. 理解基本人工智慧與專家系統相關技術與方法 2. 具備設計與撰寫專家系統的能力</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">119.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=49U00157&mCos_Class=A&mSmtr=0982">(大學日間部 )數位教學設計【第098學年第2學期：A班】
                                            1.了解數位教學設計基本觀念 2.具備考取數位學習證照能力 3.學習大三專題製作技術 4.有助於資訊教育相關研究所升學考試</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">120.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=49U00025&mCos_Class=A&mSmtr=0982">(大學日間部 )物件導向軟體工程【第098學年第2學期：A班】
                                            1.了解軟體工程的基本觀念。 2.了解如何應用物件導向觀念進行軟體工程。 3.學習UML。 4.學習JAVA。</a></td>
                                </tr>
                            </table>
                        </div>
                        <div id="130" class="tab-pane fade">
                            <h3>121~130</h3>
                            <table border="1" width="700">
                                <tr class="coursestyle">
                                    <td align="center" width="10%">121.</td>
                                    <td width="90%"><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=49U00019&mCos_Class=B&mSmtr=0982">(大學日間部 )系統分析與設計【第098學年第2學期：B班】
                                            1.了解系統分析與設計的基本觀念。 2.了解如何應用系統分析與設計。 3.學習UML。 4.學習JAVA。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">122.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=49U00019&mCos_Class=A&mSmtr=0982">(大學日間部 )系統分析與設計【第098學年第2學期：A班】
                                            1.了解系統分析與設計的基本觀念。 2.了解如何應用系統分析與設計。 3.學習UML。 4.學習JAVA。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">123.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=49U00124&mCos_Class=A&mSmtr=0981">(大學日間部 )數位學習概論【第098學年第1學期：A班】
                                            本課程第一節8:10的課將會調走! 歡迎同學加選! 1.了解數位學習基本觀念 2.具備考取數位學習證照能力 3.學習大三專題製作技術 4.有助於資訊教育相關研究所升學考試</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">124.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=49U00025&mCos_Class=B&mSmtr=0981">(大學日間部 )物件導向軟體工程【第098學年第1學期：B班】
                                            1.了解軟體工程的基本觀念。 2.了解如何應用物件導向觀念進行軟體工程。 3.學習UML。 4.學習JAVA。</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">125.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=49U00025&mCos_Class=A&mSmtr=0981">(大學日間部 )物件導向軟體工程【第098學年第1學期：A班】
                                            1.了解軟體工程的基本觀念。 2.了解如何應用物件導向觀念進行軟體工程。 3.學習UML。 4.學習JAVA。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">126.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=49U00005&mCos_Class=A&mSmtr=0981">(大學日間部 )人工智慧與專家系統【第098學年第1學期：A班】
                                            本課程主要是從代理人(agent)的基本概念講解,使學生認識人工智慧之基本觀念,並教導學生認識與使用專家系統的建置工具-JESS,並使學生能實際了解目前專家系統的應用狀況。 1. 理解基本人工智慧與專家系統相關技術與方法 2. 具備設計與撰寫專家系統的能力</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">127.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=93U00136&mCos_Class=B&mSmtr=0972">(大學日間部 )資訊與生活【第097學年第2學期：B班】
                                            培養資訊素養與學習態度; 學習大學資訊基礎技能; 發揮資訊應用於生活之創意.</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">128.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=66E00053&mCos_Class=A&mSmtr=0972">(碩士在職專班 )數位學習【第097學年第2學期：A班】
                                            培養e-learning論文研讀能力; 訓練e-learning論文簡報能力; 練習e-learning論文寫作技巧.</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">129.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=61M00015&mCos_Class=A&mSmtr=0972">高等知識管理【第097學年第2學期：A班】
                                            學習知識管理的理論,實務與個案; 訓練知識管理論文研讀,簡報與研究的能力.</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">130.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=60U00099&mCos_Class=B&mSmtr=0972">(大學日間部 )軟體工程導論【第097學年第2學期：B班】
                                            知道為何要學習軟體工程; 學習軟體工程基本概念; 練習如何進行軟體工程.</a></td>
                                </tr>
                            </table>
                        </div>
                        <div id="140" class="tab-pane fade">
                            <h3>131~140</h3>
                            <table border="1" width="700">
                                <tr class="coursestyle">
                                    <td align="center" width="10%">131.</td>
                                    <td width="90%"><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=60U00099&mCos_Class=A&mSmtr=0972">(大學日間部 )軟體工程導論【第097學年第2學期：A班】
                                            知道為何要學習軟體工程; 學習軟體工程基本概念; 練習如何進行軟體工程.</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">132.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=60U00049&mCos_Class=A&mSmtr=0971">(大學日間部 )軟體品質管理【第097學年第1學期：A班】
                                            At the end of this course, students will be able to: 1.Understand fundamental concepts of software quality. 2.Understand techniques for measuring quality of software. 3.Understand techniques for verifying quality of software. 4.Understand techniques f</a></td>
                                </tr>
                                <tr class="coursestyle">
                                    <td align="center">133.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=60U00025&mCos_Class=A&mSmtr=0971">(大學日間部 )物件導向軟體工程【第097學年第1學期：A班】
                                            1.了解物件導向軟體工程的理論、方法與工具。 2.透過term project實際應用物件導向軟體工程的方法。</a></td>
                                </tr>
                                <tr class="coursestyle2">
                                    <td align="center">134.</td>
                                    <td><a href="https://webs.asia.edu.tw/courseinfo/course_outline.asp?mCos_id=60U00005&mCos_Class=A&mSmtr=0971">(大學日間部 )人工智慧與專家系統【第097學年第1學期：A班】
                                            1. 理解基本人工智慧與專家系統相關技術與方法 2. 具備設計與撰寫專家系統的能力</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="tab-pane" id="tab_d">
                    <h2 class="h1font">指導論文/Thesis advising</h2>
                    <table border="1" width="700">
                        <tr style="text-align: justify;background:#BBFFFF">
                            <td width="10%" align="center">1.</td>
                            <td width="90%">1052：張以勤
                                就業學程對於大學生學習成效與態度影響之研究<br/>
                                A Study of Impact of an Employment Program for College Students on Learning Performance and Attitudes</td>
                        </tr>
                        <tr style="text-align: justify;background:#A6FFA6">
                            <td align="center">2.</td>
                            <td>1052：黃沛禎
                                應用3D動畫於生物化學課程教學之研究<br/>
                                A Study of Applying 3D Instructional Animations to a Biochemistry Course</td>
                        </tr>
                        <tr style="text-align: justify;background:#BBFFFF">
                            <td align="center">3.</td>
                            <td>1052：黃沛禎
                                應用3D動畫於生物化學課程教學之研究<br/>
                                A Study of Applying 3D Instructional Animations to a Biochemistry Course</td>
                        </tr>
                        <tr style="text-align:justify;background: #A6FFA6">
                            <td align="center">4.</td>
                            <td>1042：曾奕華
                                應用故事敘述模式與動畫於國中生霸凌預防教學評量之研究
                                運用講故事模式與動畫對初中生欺凌預防教學與評估</td>
                        </tr>
                        <tr style="text-align:justify;background:#BBFFFF">
                            <td align="center">5.</td>
                            <td>1042：陳綱洵
                                借位減法補救教學APP設計 - 以國小三年級數學為例
                                數學應用設計輔導教學：三年級學生借貸減扣個案研究</td>
                        </tr>
                        <tr style="text-align: justify;background: #A6FFA6">
                            <td align="center">6.</td>
                            <td>1042：黃欣盈
                                補救教學APP之設計與應用 - 以國中一年級四則運算為例
                                APP應用於七年級數學補習教學的設計與應用</td>
                        </tr>
                        <tr style="text-align: justify;background: #BBFFFF">
                            <td align="center">7.</td>
                            <td>1042：陳瑾慧
                                電子繪本融入國小特教班藝術與人文學習領域學生學習成效之研究
                                電子故事書應用於特殊教育學生學習藝術與人文課程的選擇性研究</td>
                        </tr>
                        <tr style="text-align: justify;background: #A6FFA6">
                            <td align="center">8.</td>
                            <td>1042：蔡鎔甄
                                電子書應用於國小閩南語課程之研究
                                小學台語教學應用於電子書</td>
                        </tr>
                        <tr style="text-align: justify;background: #BBFFFF">
                            <td align="center">9.</td>
                            <td>1041：邱靜君
                                應用Google Classrom 建構數位學習系統輔助國小資訊課程教學之研究 - 以SCRATCH教學為例
                                應用Google課堂電子學習系統輔助小學信息技術課程教學的研究從零開始學習的案例。</td>
                        </tr>
                        <tr style="text-align: justify;background: #A6FFA6">
                            <td align="center">10.</td>
                            <td>1022：李承儒
                                故事敘述模型應用於國中生情緒管理教學評量之研究
                                運用講故事模式對初中生情緒管理教學與評價</td>
                        </tr>
                        <tr style="text-align: justify;background: #BBFFFF">
                            <td align="center">11.</td>
                            <td>1021：謝蟬薇
                                課輔志工模擬訓練系統之設計與製作 - 以國小三年級數學減法為例
                                志願者輔導員模擬訓練系統的設計與實現：三年級學生減法指導的個案研究</td>
                        </tr>
                        <tr style="text-align: justify;background: #A6FFA6">
                            <td align="center">12.</td>
                            <td>1021：張家瑋
                                情緒管理遊戲之設計與製作 - 應用於國中生自傷預防教學
                                情緒管理遊戲的設計與實現：初中生自傷預防指導</td>
                        </tr>
                        <tr style="text-align: justify;background: #BBFFFF">
                            <td align="center">13.</td>
                            <td>1021：許育銘
                                基於迷思概念分類的虛擬教具資源庫之研製 - 以國小中年級數學單元為例
                                基於誤解類別的虛擬操作庫的設計與實現：三，四年級數學輔導</td>
                        </tr>
                        <tr style="text-align: justify;background: #A6FFA6">
                            <td align="center">14.</td>
                            <td>1011：簡青瑜
                                應用
                                基於認知衝突的虛擬教學法在課後輔導之研究 - 以國小四年級四則運算單元為例舉個例子</td>
                        </tr>
                        <tr style="text-align: justify;background: #BBFFFF">
                            <td align="center">15.</td>
                            <td>1011：張傑
                                基於多階段圖產品的故事敘說動畫製作之研究-以校園霸凌預防為例
                                講故事動畫製作的基於多級圖的研究：預防欺凌的案例研究</td>
                        </tr>
                        <tr style="text-align: justify;background: #A6FFA6">
                            <td align="center">16.</td>
                            <td>1001：陳聰智
                                應用操作式虛擬教具在課後輔導之研究 - 以國小三年級數學減法單元為例
                                運用虛擬操作法在課外輔導中的應用研究 - 三年級學生減法教學案例研究</td>
                        </tr>
                        <tr style="text-align: justify;background: #BBFFFF">
                            <td align="center">17.</td>
                            <td>0992：林智瑩
                                應用於課後輔導之診斷測驗與補救教學研究 - 以一元一次方程單元為例
                                一，應用診斷測試及輔導教學對課外輔導的研究 - 以單變量線性方程組為例</td>
                        </tr>
                        <tr style="text-align: justify;background: #A6FFA6">
                            <td align="center">18.</td>
                            <td>0982：謝明發
                                建置維基式教學平台輔助國小手球訓練之研究
                                在元素學校建立維基手球訓練知識平台的研究</td>
                        </tr>
                        <tr style="text-align: justify;background: #BBFFFF">
                            <td align="center">19.</td>
                            <td>0982：張耀鴻
                                以維基系統建置國小數學課輔範例庫之研究
                                構建基於維基的小學數學輔導數學實例推薦系統</td>
                        </tr>
                        <tr style="text-align: justify;background: #A6FFA6">
                            <td align="center">20.</td>
                            <td>0982：江健華
                                使用維基式教學資源庫輔助適性化品格教育之研究
                                基於Wiki的學習資源知識庫</td>
                        </tr>
                        <tr style="text-align: justify;background: #BBFFFF">
                            <td align="center">21.</td>
                            <td>0982：時碧英
                                維基平台蒐集提示句加強學裡修辭能力之研究
                                用維基平台收集修辭學習提示句</td>
                        </tr>
                        <tr style="text-align: justify;background: #A6FFA6">
                            <td align="center">22.</td>
                            <td>0982：莉時鈞
                                使用維基提示行業釋義法律加強國小學童寫作能力之研究
                                使用基於維基提示方法，加強對兒童的學習寫作</td>
                        </tr>
                    </table>
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
