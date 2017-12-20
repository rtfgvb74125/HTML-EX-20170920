<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2017/12/3
 * Time: 下午 10:58
 */
include ("funtion.php");
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
                background-color: #020409;
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
                <p>[1]   Chao-Tung Yang, Wen-Chung Shih, Chih-Lin Huang, Fuu-Cheng Jiang and William Cheng-Chung Chu, (2016), “On construction of a distributed data storage system in cloud,” Computing, 98(1-2), pp. 93–118. [EI].</p>
                <p>[2]   Chao-Tung Yang, Wen-Chung Shih, Lung-Teng Chen, Cheng-Ta Kuo, Fuu-Cheng Jiang and Fang-Yie Leu, (2015), “Accessing medical image file with co-allocation HDFS in cloud,” Future Generation Computing Systems (FGCS), 43-44, pp. 61-73. [SCI].</p>
                <p>[3]   Chao-Tung Yang, Jung-Chun Liu, Rajiv Ranjan, Wen-Chung Shih and Chih-Hao Lin, (2013), “On construction of heuristic QoS bandwidth management in clouds,” Concurrency and Computation: Practice and Experience, 25(18), pp. 2540–2560. [SCI].</p>
                <p>[4]   Che-Ching Yang, Shian-Shyong Tseng, Wen-Chung Shih and Tyne Liang, (2012), “A cross-text annotation sharing mechanism for enhancing students’ comprehension of poetry,” The Turkish Online Journal of Educational Technology, 11(4), pp. 13-24. [SSCI].</p>
                <p>[5]   Wen-Chung Shih, Shian-Shyong Tseng, Che-Ching Yang, Chih-Yu Lin and Tyne Liang, (2012), “A Folksonomy-based Guidance Mechanism for Context-aware Ubiquitous Learning: a Case Study of Chinese Scenic Poetry Appreciation Activities,” Educational Technology & Society, 15(1), pp. 90-101. [SSCI]. (NSC98-2511-S-468-002 )</p>
                <p>[6]   Chao-Tung Yang, Wen-Chung Shih and Lung-Hsing Cheng, (2012), “Performance-based Dynamic Loop Scheduling in Heterogeneous Computing Environments,” Journal of Supercomputing, 59(1), pp. 414-442. [SCI].</p>
                <p>[7]   Wen-Chung Shih, Shian-Shyong Tseng, Che-Ching Yang and Tyne Liang, (2011), “Time-Quality Tradeoff of Waiting Strategies for Tutors to Retrieve Relevant Teaching Methods,” Educational Technology & Society, 14(4), pp. 207-221. [SSCI]. (NSC 99-2511-S-468-003- )</p>
                <p>[8]   Chao-Tung Yang and Wen-Chung Shih, (2011), “On Construction of Cluster and Grid Computing Platforms for Parallel Bioinformatics Applications,” International Journal of Grid and High Performance Computing, 3(1), pp. 69-88. [EI]</p>
                <p>[9]   Wen-Chung Shih, Chao-Tung Yang and Shian-Shyong Tseng, (2010), “Performance-based Data Distribution for Data Mining Applications on Grid Computing Environments,” Journal of Supercomputing, 52(2), pp. 171-198. [SCI]. (NSC 97-2511-S-468-003- )</p>
                <p>[10]  Wen-Chung Shih, Chao-Tung Yang, Shian-Shyong Tseng and Yianshu Chu, (2010), “Using an Interactive Approach to Finding Right Tutors on P2P Tutoring Grids,” Journal of Internet Technology (JIT), 11(2), pp. 215-225. [SCI]. (NSC 97-2511-S-468-003- )</p>
                <p>[11]  Chao-Tung Yang, Wen-Chung Shih and Ching-Hsien Hsu, (2010), “On Utilization of the Grid Computing Technology for Video Conversion and 3D Rendering,” Computer Standards & Interfaces, 32(1), pp. 29-37. [SCI].</p>
                <p>[12]  Wen-Chung Shih, Chao-Tung Yang and Shian-Shyong Tseng, (2009), “Ontology-based Content Organization and Retrieval for SCORM-Compliant Teaching Materials in Data Grids,” Future Generation Computing Systems (FGCS), 25(6), pp. 687-694. [SCI]. (NSC 97-2511-S-468-003- )</p>
                <p>[13]  Wen-Chung Shih and Shian-Shyong Tseng, (2009), “A Knowledge-based Approach to Retrieving Teaching Materials for Context-aware Learning,” Educational Technology & Society, 12(1), pp. 82-106. [SSCI]. (NSC 97-2511-S-468-003- )</p>
                <p>[14]  Wen-Chung Shih, Chao-Tung Yang, and Shian-Shyong Tseng, (2009), “Using a Performance-based Skeleton to Implement Divisible Load Applications on Grid Computing Environments,” Journal of Information Science and Engineering (JISE), 25(1), pp. 59-81. [SCI]. (NSC 97-2511-S-468-003- )</p>
                <p>[15]  Wen-Chung Shih, Shian-Shyong Tseng, and Chao-Tung Yang, (2008), “Wiki-based Rapid Prototyping for Teaching-Material Design in e-Learning Grids,” Computers & Education, 51(3), pp. 1037-1057. [SSCI].</p>
                <p>[16]  Wen-Chung Shih, Shian-Shyong Tseng, and Chao-Tung Yang, (2008), “Using Taxonomic Indexing Trees to Efficiently Retrieve SCORM-compliant Documents in e-Learning Grids,” Journal of Educational Technology & Society, 11(2), pp. 206-226. [SSCI].</p>
                <p>[17]  Chao-Tung Yang, Wen-Chung Shih, and Shian-Shyong Tseng, (2008), “Dynamic Partitioning of Loop Iterations on Heterogeneous PC Clusters,” Journal of Supercomputing, 44(1), pp. 1-23. [SCI].</p>
                <p>[18]  Wen-Chung Shih, Chao-Tung Yang, and Shian-Shyong Tseng, (2007), “A Performance-based Parallel Loop Scheduling on Grid Environments,” Journal of Supercomputing, 41(3), pp. 247-267. [SCI].</p>
                <p>[19]  Chao-Tung Yang, Kuan-Wei Cheng, and Wen-Chung Shih, (2007), “On development of an efficient parallel loop self-scheduling for grid computing environments,” Parallel Computing, 33(7-8), pp. 467-487. [SCI].</p>
            </div>
            <div class="tab-pane" id="orange">
                <h1>Ｂ. 國際研討會與專書論文</h1>
                <p>Lecture Notes in Computer Science</p>
                <p>[1]   Chao-Tung Yang, Wen-Chung Shih and Chih-Lin Huang, (2012), “Implementation of a distributed data storage system with resource monitoring on cloud computing,” in Proc. of GPC 2012, Lecture Notes in Computer Science, Vol. 7296, pp. 64-73. [EI]</p>
                <p>[2]   Chao-Tung Yang, Cheng-Ta, Kuo, Wen-Hung Hsu and Wen-Chung Shih, (2012), “A medical image file accessing system with virtualization fault tolerance on cloud,” in Proc. of GPC 2012, Lecture Notes in Computer Science, Vol. 7296, pp. 64-73. [EI]</p>
                <p>[3]   Wen-Chung Shih, Shian-Shyong Tseng, and Chao-Tung Yang, (2011), “Deployment of Interactive Games in Learning Management Systems on Cloud Environments for Diagnostic Assessments,” in Proc. of Edutainment 2011, Sep. 7-9, 2011, Taipei, Taiwan and M. Chang et al. (Eds.) Lecture Notes in Computer Science, Vol. 6872, pp. 492-496. [EI]</p>
                <p>[4]   Wen-Chung Shih, Chao-Tung Yang, and Shian-Shyong Tseng, (2007), “Performance-based Workload Distribution on Grid Environments,” in Proc. of 2nd International Conference on Grid and Pervasive Computing (GPC 2007), May 2-4, 2007, Paris, France and Lecture Notes in Computer Science, Vol. 4459, pp. 385-396.</p>
                <p>[5]   Wen-Chung Shih, Chao-Tung Yang, and Shian-Shyong Tseng, (2006), “A Methodology for Retrieving SCORM-Compliant Teaching Materials on Grid Environments,” in Proc. of 9th International Conference on Asian Digital Library (ICADL 2006), Nov. 27-30, 2006, Kyoto, Japan and Lecture Notes in Computer Science,Vol. 4312, pp. 498-502.</p>
                <p>[6]   Wen-Chung Shih, Chao-Tung Yang, and Shian-Shyong Tseng, (2006), “A Dynamic Partitioning Self-scheduling Scheme for Parallel Loops on Heterogeneous Clusters,” in Proc. of International Conference on Computational Science (ICCS 2006), May 28-31, 2006, University of Reading, UK, and Lecture Notes in Computer Science, Vol. 3991, pp. 810-813.</p>
                <p>[7]   Wen-Chung Shih, Chao-Tung Yang, and Shian-Shyong Tseng, (2006), “A Performance-Based Approach to Dynamic Workload Distribution for Master-Slave Applications on Grid Environments,” in Proc. of 1st International Conference on Grid and Pervasive Computing (GPC 2006), May 3-5, 2006, Taichung, Taiwan and Lecture Notes in Computer Science, Vol. 3947, pp. 73-82.</p>
                <p>[8]   Wen-Chung Shih, Chao-Tung Yang, and Shian-Shyong Tseng, (2005), “A Performance-Based Parallel Loop Self-scheduling on Grid Computing Environments,” in Proc. of IFIP International Conference on Network and Parallel Computing (NPC 2005), Nov. 30-Dec. 3, 2005, Beijing, China and Lecture Notes in Computer Science, Vol. 3779, pp. 48-55.</p>
                <p>[9]   Wen-Chung Shih, Chao-Tung Yang, and Shian-Shyong Tseng, (2005), “A Hybrid Parallel Loop Scheduling Scheme on Grid Environments,” in Proc. of 4th International Conference on Grid and Cooperative Computing (GCC 2005), Nov. 30-Dec. 3, 2005, Beijing, China and Lecture Notes in Computer Science, Vol. 3795, pp. 370-381.</p>
                <p>[10]  Wen-Chung Shih, Chao-Tung Yang, and Shian-Shyong Tseng, (2005), “Performance-Based Loop Scheduling on Grid Environments,” in Proc. of ISHPC 2005, September 7-9, 2005, Nara, Japan and Lecture Notes in Computer Science, Vol. 4759, pp. 238-245.</p>
                <hr>
                <p>Communications in Computer and Information Science</p>
                <p>[1]     Wen-Chung Shih, Shian-Shyong Tseng, Che-Ching Yang, Jui-Feng Weng and Tyne Liang (2008), “Interview-based Photo Tagging for Expressing Course Concepts in Ubiquitous Chinese Poetry Learning,” The 1st ATHENS WORLD SUMMIT ON THE KNOWLEDGE SOCIETY (WSKS 2008), Sep. 24-28, 2008, Athens, Greece, Communications in Computer and Information Science, Vol. 19, pp. 586-592.</p>
                <hr>
                <p>Book Chapters</p>
                <p>[1]     Wen-Chung Shih and Shian-Shyong Tseng, (2011), “The Content-Based Face of Organizations,” The New Faces of Organizations in the 21st Century, Vol. 3, NAISIT Publishers, 978-0-986-53352-5, pp. 119-146.</p>
                <p>[2]     Wen-Chung Shih, Shian-Shyong Tseng and Jui-Feng Weng, (2008), “Teaching-Material Crystallization: Wiki-based Rapid Prototyping for Teaching-Material Design,” Web 2.0: The Business Model, Oct. 20, 2008, Springer US, 978-0-387-85894-4, pp. 249-270. </p>
            </div>
            <div class="tab-pane" id="yellow">
                <h1>C. 研討會論文(Conference Papers)</h1>
                <p>[1]   Yang, C. T., Lu, H. W., & Wen-Chung Shih. (2016). Design of a big data accessing and processing architecture using cloud computing technologies. Paper presented at the 2016 6th International Workshop on Computer Science and Engineering, WCSE 2016</p>
                <p>[2]   Wen-Chung Shih, (2015), “Enhancing virtual manipulatives for after-school tutoring in the subtraction unit,” in Proc. of ICIMSA 2015, Lecture Notes in Electrical Engineering, Vol. 349, pp. 439-449. [EI]</p>
                <p>[3]   Wen-Chung Shih, (2014), “A framework of educational app repositories with recommendation powered by social tag mining,” ICISA 2014, May 6-9, 2014, Seoul, Korea, 264-266. (NSC 102-2511-S-468 -001- ) [EI]</p>
                <p>[4]   Wen-Chung Shih and Tsung-Chih Chen, (2013), “Using Virtual Manipulatives Based on Misconception to Assist After-School Remedial Instruction: A Case Study,” IEEE 13th International Conference on Advanced Learning Technologies (ICALT 2013), Beijing, China, July 15-18, 2013. 437-438. (NSC 100-2628-S-468-001-MY2 ) [EI]</p>
                <p>[5]   Wen-Chung Shih and Shian-Shyong Tseng, (2012), “Folksonomy-based Indexing for Retrieving Tutoring Resources,” The 7th IEEE International Conference on Wireless, Mobile, and Ubiquitous Technology in Education (WMUTE 2012), Mar. 27-30, 2012, Takamatsu, Kagawa, Japan, pp. 1-5. (NSC 100-2628-S-468-001-MY2 ) [EI]</p>
                <p>[6]   Wen-Chung Shih, Chao-Tung Yang and Shian-Shyong Tseng, (2011), “Fuzzy Folksonomy-based Index Creation for e-Learning Content Retrieval on Cloud Computing Environments,” FUZZ-IEEE 2011, June 27-30, 2011, Taipei, Taiwan. (NSC 99-2511-S-468-003- ) [EI]</p>
                <p>[7]   Wen-Chung Shih, Shian-Shyong Tseng and Chao-Tung Yang, (2011), “Due Time Setting for Peer-to-Peer Retrieval of Teaching Material in Cloud Computing Environments,” ICISA 2011, Apr. 26-29, 2011, Jeju, Korea. (NSC 99-2511-S-468-003- ) [EI]</p>
                <p>[8]   Chao-Tung Yang, Wen-Chung Shih, Guan-Han, Chen and Shih-Chi, Yu, (2010), “Implementation of a Cloud Computing Environment for Hiding Huge Amounts of Data,” ISPA 2010, Sep. 6-9, 2010, Taipei, Taiwan. [EI]</p>
                <p>[9]   Wen-Chung Shih, Shian-Shyong Tseng and Chao-Tung Yang, (2010), “Performance Study of Parallel Programming on Cloud Computing Environments Using MapReduce,” ICISA 2010, Apr. 21-23, 2010, Seoul, Korea, pp.126-133. (NSC 98-2511-S-468-002- ) [EI]</p>
                <p>[10]  Wen-Chung Shih, Shian-Shyong Tseng, Chao-Tung Yang and Anthony Y. H. Liao, (2010), “Generating Adaptive Learning Sheets for Museum Tour Guide in U-Learning Grid Environments,” WMUTE 2010, Apr. 12-16, Kaohsiung, Taiwan, pp. 122-126. (NSC 98-2511-S-468-002- ) [EI]</p>
                <p>[11]  Wen-Chung Shih and Shian-Shyong Tseng, (2009), “A Two-phased Approach to Retrieving Learning Content in Peer-to-Peer Grids,” International Conference on Education Technology and Computer (ICETC 2009), Apr. 17-20, 2009, Singapore, pp.106-110. (NSC 97-2511-S-468-003- ) [EI]</p>
                <p>[12]  Wen-Chung Shih and Shian-Shyong Tseng, (2008), “Folksonomy-based Indexing for Location-aware Retrieval of Learning Contents,” The 5th IEEE International Conference on Wireless, Mobile, and Ubiquitous Technology in Education (WMUTE 2008), Mar. 23-26, 2008, Beijing, China, pp. 143-147. (The Best Paper Award) [EI]</p>
                <p>[13]  Chao-Tung Yang, Wen-Chung Shih and Shian-Shyong Tseng, (2008), “A Heuristic Data Distribution Scheme for data mining applications on grid environments,” IEEE International Conference on Fuzzy Systems, 2008 (FUZZ-IEEE 2008), Jun. 1-6, 2008, Hong Kong, pp. 2398-2404. [EI]</p>
                <p>[14]  Wen-Chung Shih, Chao-Tung Yang, Chun-Jen Chen, and Shian-Shyong Tseng, (2007), “Parallel Loop Scheduling Using Knowledge-Based Workload Estimation on Grid Environments,” in Proc. of the IEEE/IPSJ International Symposium on Applications and the Internet (SAINT 2007), Jan. 15-19, 2007, Hiroshima, Japan. [EI]</p>
                <p>[15]  Wen-Chung Shih, Shian-Shyong Tseng and Chao-Tung Yang, (2007), “Building a Global Index for Rapidly Retrieving SCORM-compliant Documents on Grid Environments,” in Proc. of the Technology Enhanced Learning Conference 2007 (TELearn 2007), Jul. 14-15, 2007, NCU, Taiwan.</p>
                <p>[16]  Wen-Chung Shih, Chao-Tung Yang, Ping-I Chen, and Shian-Shyong Tseng, (2006), “Performance-Based Content Retrieval for Learning Object Repositories on Grid Environments,” in Proc. of 7th International Conference on Parallel and Distributed Computing, Applications and Technologies (PDCAT 2006), Dec. 4-7, 2006, Taipei, Taiwan, pp. 515-520. [EI]</p>
                <p>[17]  Wen-Chung Shih, Chao-Tung Yang, Shian-Shyong Tseng, and Chun-Jen Chen, (2006), “A Peer-to-Peer Based Framework of InterLibrary Cooperation for Digital Libraries,” in Proc. of 7th International Conference on Parallel and Distributed Computing, Applications and Technologies (PDCAT 2006), Dec. 4-7, 2006, Taipei, Taiwan, pp. 521-524. [EI]</p>
                <p>[18]  Wen-Chung Shih, Chao-Tung Yang, Ping-I Chen, and Shian-Shyong Tseng, (2005), “A Hybrid Parallel Loop Scheduling Scheme on Heterogeneous PC Clusters,” in Proc. of 6th International Conference on Parallel and Distributed Computing, Applications and Technologies (PDCAT 2005), Dec. 5-8, 2005, Dalian, China, pp. 56-58. [EI]</p>
            </div>
            <div class="tab-pane" id="green">
                <h1>D. 中文期刊論文(Chinese Journal Papers)</h1>
                <p>[1]   時文中、許育銘, (in press), “基於迷思概念分類的虛擬教具資源庫之研製,” 人文社會學報。</p>
                <p>[2]   謝蟬薇、時文中, (in press), “應用情境模擬系統於課輔志工訓練之研究：以國小三年級數學減法為例,” 數位學習科技期刊。</p>
                <p>[3]   張家瑋、時文中、翁瑞鋒、曾憲雄, (2014), “應用情緒管理遊戲於國中生自傷預防教育之評量,” 數位學習科技期刊, 6(1), pp. 27-41。(NSC 100-2632-S-468-001-MY3)</p>
                <p>[4]   時文中、曾憲雄, (2011), “基於照片標籤的形成性評量提升戶外唐詩教學成效之研究,” 華文學刊, 9(2), pp. 13-22, 新加坡華文教師總會。(NSC 98-2511-S-468-002- )</p>
            </div>
            <div class="tab-pane" id="blue">
                <h1>E. 國內研討會論文(Conference Papers)</h1>
                <p>[1]   黃沛禎、時文中、謝宥諒, (2017), “轉譯因子協助蛋白質合成之3D動畫教學影片製作與評估,” 第12屆台灣數位學習發展研討會(TWELF 2017), Mar. 16-17, 2017, NCU, Taiwan.</p>
                <p>[2]   張以勤、楊宗瑜、時文中, (2017), “大專生參與就業實習學程對於學習成效之影響,” 第12屆台灣數位學習發展研討會(TWELF 2017), Mar. 16-17, 2017, NCU, Taiwan.</p>
                <p>[3]   時文中、黃欣盈、陳綱洵, (2014), “以群眾外包製作APP虛擬教具支援數學課輔之研究,” 第十屆台灣數位學習發展研討會(TWELF 2014), Nov. 13-14, 2014, Taipei, Taiwan. （NSC 102-2511-S-468 -001, MOST 103-2511-S-468 -003）</p>
                <p>[4]   謝蟬薇、時文中、黃欣盈、陳綱洵, (2013), “用互動式情境模擬系統於課輔志工訓練之研究：以國小三年級數學減法為例,” 全國計算機會議(National Computer Symposium, NCS 2013), Dec. 13-14, 2013, Taichung, Taiwan. （NSC 100-2628-S-468-001-MY2, NSC 101-2511-S-468-003, NSC 102-2511-S-468 -001）</p>
                <p>[5]   張家瑋、時文中、曾憲雄、陳科翰、翁瑞鋒, (2013), “應用情緒管理遊戲於國中生自傷預防教育之評量：以個人化認知偏誤為例,” 全國計算機會議(National Computer Symposium, NCS 2013), Dec. 13-14, 2013, Taichung, Taiwan. （NSC 100-2632-S-468-001-MY3, NSC 100-2628-S-468-001-MY2, NSC 101-2511-S-468-003）</p>
                <p>[6]   李承儒、時文中、曾憲雄、曾奕華、翁瑞鋒, (2013), “故事敘說模型應用於國中生情緒管理教學評量之初探,” 第九屆台灣數位學習發展研討會(TWELF 2013), Nov. 27-28, 2013, Taichung, Taiwan. （NSC 100-2632-S-468-001-MY3, NSC 100-2628-S-468-001-MY2, NSC 101-2511-S-468-003）</p>
                <p>[7]   許育銘、時文中、簡青瑜、陳聰智, (2013), “虛擬教具資源庫之研製－應用於國小數學志工課輔,” 第九屆台灣數位學習發展研討會(TWELF 2013), Nov. 27-28, 2013, Taichung, Taiwan. （NSC 100-2628-S-468-001-MY2, NSC 101-2511-S-468-003, NSC 102-2511-S-468 -001）</p>
                <p>[8]   李承儒、翁瑞鋒、時文中、曾憲雄, (2013), “互動式故事敘說應用於自傷預防情緒管理之研究,” 全球華人計算機教育應用大會(GCCCE 2013), May 27-31, 2013, Beijing, Cnina. （NSC 100-2632-S-468-001-MY3）</p>
                <p>[9]   何叡孟、翁瑞鋒、時文中、曾憲雄, (2013), “互動式遊戲應用於霸凌預防情緒管理之研究,” 全球華人計算機教育應用大會(GCCCE 2013), May 27-31, 2013, Beijing, Cnina. （NSC 100-2632-S-468-001-MY3）</p>
                <p>[10]  謝蟬薇、簡青瑜、時文中, (2013), “應用互動式情境模擬系統於課輔志工訓練之研究：以國小四則運算為例,” 第七屆資訊科技國際研討會(AIT 2013), Apr. 26-27, 2013, Taichung, Taiwan. （NSC 100-2628-S-468-001-MY2, NSC 101-2511-S-468-003-）</p>
                <p>[11]  張家瑋、翁瑞鋒、時文中、曾憲雄, (2012), “互動遊戲式評量應用於情緒管理之研究,” 第八屆台灣數位學習發展研討會(TWELF 2012), Oct. 26-27, 2012, Tainan, Taiwan. （NSC 100-2632-S-468-001-MY3, NSC 100-2628-S-468-001-MY2, NSC 101-2511-S-468-003）</p>
                <p>[12]  張傑、翁瑞鋒、時文中、曾憲雄, (2012), “互動式故事敘說應用於校園霸凌預防之研究,” 第八屆台灣數位學習發展研討會(TWELF 2012), Oct. 26-27, 2012, Tainan, Taiwan. （NSC 100-2632-S-468-001-MY3, NSC 100-2628-S-468-001-MY2, NSC 101-2511-S-468-003）</p>
                <p>[13]  張傑、翁瑞鋒、時文中、曾憲雄, (2012), “互動式故事板應用於衝突管理學習之先導型研究 - 以校園霸凌預防為例,” 全球華人計算機教育應用大會(GCCCE 2012), May 28-Jun. 1, 2012, Kenting, Taiwan. （NSC 100-2632-S-468-001-MY3）</p>
                <p>[14]  簡青瑜、陳聰智、時文中, (2012), “應用Facebook與操作式虛擬教具於課後輔導之研究-以國小五年級等值分數為例,” 第六屆資訊科技國際研討會(AIT 2012), Apr. 27, 2012, Taichung, Taiwan. (NSC 100-2628-S-468-001-MY2 )</p>
                <p>[15]  林智瑩、時文中、黃桂芝, (2011), “適用於課後輔導之診斷測驗與補救教學設計,” 第七屆台灣數位學習發展研討會(TWELF 2011), Nov. 4-5, 2011, Taipei, Taiwan. （NSC 99-2511-S-468-003、NSC 100-2628-S-468-001-MY2）</p>
                <p>[16]  林智瑩、時文中, (2011), “適用於課輔補救教學之診斷策略研究─以國中數學低成就學生為例,” 資訊教育與科技應用研討會(IETAC 2011), Mar. 4, 2011, Taichung, Taiwan. (NSC 99-2511-S-468-003-)</p>
                <p>[17]  陳聰智、時文中, (2011), “SCORM教材行動檢索方法之研究,” 資訊教育與科技應用研討會(IETAC 2011), Mar. 4, 2011, Taichung, Taiwan. (NSC 99-2511-S-468-003-)</p>
                <p>[18]  林致宇、時文中, (2010), “位置感知旅遊翻譯機之設計與實作,”第六屆台灣數位學習發展研討會(TWELF 2010), Oct. 22, 2010, Taichung, Taiwan. (NSC 98-2511-S-468-002- )</p>
                <p>[19]  時文中、黃桂芝、張耀鴻, (2010), “以Web2.0建置國小創意教學知識庫平台之研究,” 第六屆台灣數位學習發展研討會(TWELF 2010), Oct. 22, 2010, Taichung, Taiwan. (NSC 98-2511-S-468-002- )</p>
                <p>[20]  江健華、張耀鴻、時文中, (2010), “建置維基式教學知識庫輔助適性化品格教育之研究,” 第五屆資訊科技國際研討會(AIT 2010), Apr. 22, 2010, Taichung, Taiwan. (NSC 98-2511-S-468-002- )</p>
                <p>[21]  謝明發、鐘淑娥、黃志勇、時文中, (2010), “提昇手球訓練成效之數位學習網,” 第五屆資訊科技國際研討會(AIT 2010), Apr. 22, 2010, Taichung, Taiwan. (NSC 98-2511-S-468-002- )</p>
                <p>[22]  時碧英、時文中, (2009), “應用物件導向學習環境與教材進行國小修辭教學之研究,” 物件導向技術及應用研討會(OOTA 2009), Nov. 20, 2009, Taichung, Taiwan. (NSC 97-2511-S-468-003- )</p>
                <p>[23]  時美梅、時文中, (2009), “使用維基提示法加強國小學童寫作能力之研究,” 資訊教育與科技應用研討會(IETAC 2009), Nov. 6, 2009, Taichung, Taiwan. (NSC 97-2511-S-468-003- )</p>
                <p>[24]  張耀鴻、高千喻、時文中, (2009), “以Web2.0的概念建置數學教學法知識庫,” 資訊教育與科技應用研討會(IETAC 2009), Nov. 6, 2009, Taichung, Taiwan. (NSC 97-2511-S-468-003- )</p>
            </div>
            <div class="tab-pane" id="set">
                <h1>設定</h1>
                <form action="add.php" method="post">
                    作者:<input type="text" name="actur"><br>
                    書名:<input type="text" name="book"><br>
                    出版社:<input type="text" name="publish"><br>
                    頁碼:<input type="text" name="page"><br>
                    日期:<input type="text" name="date"><br>
                    種類:<select type = "text" name="type">
                        <option value="0">期刊論文</option>
                        <option value="1">國際研討會與專書論文</option>
                        <option value="2">研討會論文</option>
                        <option value="3">中文期刊</option>
                        <option value="4">國內研討會論文</option>
                    </select>
                    <br>
                    <input type="submit">
                </form>
            </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center">
        <p>105021056 @ live.asia.edu.tw</p>
    </footer>

</body>
</html>

