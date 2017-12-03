<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2017/12/3
 * Time: 下午 11:04
 */
include ("funtion.php");
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
            <a class="navbar-brand" href="http://csie.asia.edu.tw/"><img src="http://csie.asia.edu.tw/csie.png" width="30"height="30" border="0"></a>

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
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
        </ul>
        <div class="col-sm-8 text-left">
            <h1 style="color: #ff1a1e">執行計畫</h1>
            <hr>


            <div class="tab-content col-md-10">
                <div class="tab-pane active" id="tab_a">
                    <h4>科技部計畫(主持人)</h4>
                    <table class="table-set" border="2" width="800">
                        <tr bgcolor="aqua">
                            <th width="10%" >計畫年度</th>
                            <th width="10%">主持人</th>
                            <th width="30%">執行機關名稱</th>
                            <th width="50%" align="center">內容</th>
                        </tr>
                        <tr>
                            <td align="center">97</td>
                            <td align="center">時文中</td>
                            <td align="center">
                                <p>亞洲大學行動商務與多媒體應用學系</p>
                            </td>
                            <td>
                                <p>計畫名稱：我適合就讀資訊系嗎？資訊學系探索遊戲之研製與歷程分析</p>
                                <p>成果報告：<img src="http://statistics.most.gov.tw/was2/images/Award/pdf.gif"></p>
                                <p>執行起迄：2008/11/01~2009/07/31</p>
                                <p>總核定金額：374,000元 </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">98</td>
                            <td align="center">時文中</td>
                            <td align="center">
                                <p>	亞洲大學行動商務與多媒體應用學系</p>
                            </td>
                            <td>
                                <p>計畫名稱：以互動式照片標籤法探尋學習者意向之研究—應用於環境感知的唐詩教學</p>
                                <p>成果報告：<img src="http://statistics.most.gov.tw/was2/images/Award/pdf.gif"></p>
                                <p>執行起迄：2009/08/01~2010/07/31</p>
                                <p>總核定金額：455,000元 </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">99</td>
                            <td align="center">時文中</td>
                            <td align="center"><p>亞洲大學行動商務與多媒體應用學系</p>
                            </td>
                            <td>
                                <p>計畫名稱：以維基式評量題庫支援課輔志工之成效研究－應用於低成就學童之數學課輔</p>
                                <p>成果報告：<img src="http://statistics.most.gov.tw/was2/images/Award/pdf.gif"></p>
                                <p>執行起迄：2010/08/01~2011/07/31</p>
                                <p>總核定金額：519,000元</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">100</td>
                            <td align="center">時文中</td>
                            <td align="center">亞洲大學行動商務與多媒體應用學系</td>
                            <td>
                                <p>	計畫名稱：雲端課輔服務學習平台之研製－應用於國小數學課輔志工訓練與評量</p>
                                <p>成果報告：<img src="http://statistics.most.gov.tw/was2/images/Award/pdf.gif"></p>
                                <p>執行起迄：2011/08/01~2013/07/31</p>
                                <p>總核定金額：1,599,000元</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">101</td>
                            <td align="center">時文中</td>
                            <td align="center">	亞洲大學行動商務與多媒體應用學系</td>
                            <td>
                                <p>計畫名稱：利用大眾分類標籤進行雲端學習歷程評量之研究－應用於數學課輔志工訓練</p>
                                <p>成果報告：<img src="http://statistics.most.gov.tw/was2/images/Award/pdf.gif"></p>
                                <p>執行起迄：2012/08/01~2013/07/31</p>
                                <p>總核定金額：334,000元 </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">102</td>
                            <td align="center">時文中</td>
                            <td align="center">亞洲大學行動商務與多媒體應用學系</td>
                            <td>
                                <p>計畫名稱：以群眾外包製作大量低成本APP虛擬教具支援數學課輔與歷程評量之研究—模式建立、軟體實作及實證評估</p>
                                <p>成果報告：<img src="http://statistics.most.gov.tw/was2/images/Award/pdf.gif"></p>
                                <p>執行起迄：</p>
                                <p>總核定金額：702,000元 </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">103</td>
                            <td align="center">時文中</td>
                            <td align="center">亞洲大學行動商務與多媒體應用學系</td>
                            <td>
                                <p>計畫名稱：翻轉課輔：悅趣式診斷評量App應用於數學課輔前測之研究</p>
                                <p>成果報告：暫不公開</p>
                                <p>執行起迄：</p>
                                <p>總核定金額：425,000元 </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">104</td>
                            <td align="center">時文中</td>
                            <td align="center">亞洲大學資訊工程學系</td>
                            <td>
                                <p>計畫名稱：過程導向之程式能力電腦輔助評量方法之設計與評估</p>
                                <p>成果報告：未達繳交期限</p>
                                <p>執行起迄：</p>
                                <p>總核定金額：506,000元</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">104</td>
                            <td align="center">時文中</td>
                            <td align="center">亞洲大學資訊工程學系</td>
                            <td>
                                <p>計畫名稱：範例引導式程式設計學習APP之研製</p>
                                <p>成果報告：未達繳交期限</p>
                                <p>執行起迄：</p>
                                <p>總核定金額：1,200,000元</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="tab-pane" id="tab_b">
                    <h4>國科會大專學生研究計畫(指導教授)</h4>
                    <table class="table-set" border="2" width="800">
                        <tr bgcolor="aqua">
                            <th width="10%" >計畫年度</th>
                            <th width="10%">職務</th>
                            <th width="30%">執行機關名稱</th>
                            <th width="50%" align="center">計畫名稱</th>
                        </tr>
                        <tr>
                            <td align="center">101</td>
                            <td align="center">指導教授</td>
                            <td align="center">
                                <p>亞洲大學資訊多媒體應用學系</p>
                                <p>古伃伶</p>
                            </td>
                            <td>
                                <p>計畫名稱：我適合就讀資訊系嗎？資訊學系探索遊戲之研製與歷程分析</p>
                                <p>計畫編號：101-2815-C-468-013-S</p>
                                <p>執行起迄：2012/07/01~2013/02/28</p>
                                <p>核定金額：47,000元</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">103</td>
                            <td align="center">指導教授</td>
                            <td align="center">
                                <p>	亞洲大學資訊多媒體應用學系</p>
                                <p>卓依潔</p>
                            </td>
                            <td>
                                <p>計畫名稱：故事敘說動畫應用於國中生情緒管理教學評量之研究</p>
                                <p>計畫編號：103-2815-C-468-037-U</p>
                                <p>執行起迄：2014/07/01~2015/02/28</p>
                                <p>核定金額：47,000元</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">104</td>
                            <td align="center">指導教授</td>
                            <td align="center"><p>亞洲大學資訊多媒體應用學系</p><p>李孟軒</p>
                            </td>
                            <td>
                                <p>計畫名稱：悅趣式診斷評量APP之研製與歷程分析</p>
                                <p>計畫編號：104-2815-C-468-029-U</p>
                                <p>執行起迄：2015/07/01~2016/02/28</p>
                                <p>核定金額：48,000元</p>
                            </td>
                        </tr>

                    </table>
                </div>
                <div class="tab-pane" id="tab_c">
                    <h4>國科會計畫(共同主持人)</h4>
                    <table class="table-set" border="2" width="800">
                        <tr bgcolor="aqua">
                            <th width="10%">計畫年度</th>
                            <th width="10%">職務</th>
                            <th width="30%">執行機關名稱</th>
                            <th width="50%">計畫名稱</th>
                        </tr>
                        <tr>
                            <td align="center">100</td>
                            <td align="center">共同主持人</td>
                            <td align="center">東海大學</td>
                            <td>
                                <p>單一整合型計畫－以問題導向學習模式發展K-16節能減碳教育成效評估及教具研發(1/3)</p>
                                <p>(NSC 100-3113-S-029-001-)</p>
                                <p>執行起迄：2011/4/1~2012/3/31</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">100</td>
                            <td align="center">共同主持人</td>
                            <td align="center">亞洲大學心理學系</td>
                            <td>
                                <p>應用互動式情境遊戲與故事敘說數位平台於青少年衝突管理與情緒管理技巧訓練之成效：自傷與霸凌行為之預防--子計畫四：互動式故事敘說平台之建置與評估-應用於親</p>
                                <p>密與同儕關係之衝突管理與情緒管理訓練課程</p>
                                <p>(NSC 100-2632-S-468-001-MY3)</p>
                                <p>執行起迄：2011/08/01~2014/07/31</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">101</td>
                            <td align="center">共同主持人</td>
                            <td align="center">東海大學</td>
                            <td>
                                <p>單一整合型計畫--以問題導向學習模式發展K-16節能減碳教育成效評估及教具研發(2/3)</p>
                                <p>(NSC 101-3113-S-029-001-)</p>
                                <p>執行起迄：2012/4/1~2013/3/31</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">101</td>
                            <td align="center">共同主持人</td>
                            <td align="center">國立臺灣師範大學教育心理與輔導學系
                                林旻沛</td>
                            <td>
                                <p>全國高中生網路成癮盛行率與相關心理社會因素及其應用互動式情境遊戲平台於網路成癮行為預防技巧訓練之成效研究</p>
                                <p>(NSC 101-2511-S-003-051-)</p>
                                <p>執行起迄：2012/8/1~2013/7/31</p>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="tab-pane" id="tab_d">
                    <h4>產學合作計畫</h4>
                    <table class="table-set" border="2" width="800">
                        <tr bgcolor="aqua">
                            <th>計畫年度</th>
                            <th>職務</th>
                            <th>執行機關名稱</th>
                            <th>計畫名稱</th>
                        </tr>
                        <tr>
                            <td align="center">99</td>
                            <td align="center">協同主持人</td>
                            <td align="center">亞洲大學資訊多媒體應用學系</td>
                            <td>
                                <p>新一代網際網路協定互通認證計畫</p>
                                <p>產業發展分項子計畫二－IPv6產業人才培育</p>
                                <p>執行起迄：20100301～20101231</p>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">100</td>
                            <td align="center">主持人</td>
                            <td align="center">亞洲大學資訊多媒體應用學系</td>
                            <td>
                                <p>Internet網路技術發展研討會</p>
                                <p>執行起迄：20110818～20110821</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div><!-- tab content -->

        </div>

    </div>
</div>

<footer class="container-fluid text-center">
    <p>105021056 @ live.asia.edu.tw</p>
</footer>

</body>
</html>

