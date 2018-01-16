<?php
/**
 * Created by PhpStorm.
 * User: warren
 * Date: 2018/1/16
 * Time: 下午 08:15
 */
include ('mysql_connect.inc.php');
session_start();
$id=$_POST['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>時文中，亞洲大學，網頁</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css2/resume.css">
    <script src="JS/resume.js"></script>
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
            background-color: #070408;
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
<body background="image/bobo2.jpg">

<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
            <?php

                    $query = "SELECT * FROM `resume` WHERE `id`='$id'";
                    if($result = $connect->query($query)) {
                        while ($row = $result->fetch_row()) {
                            ?>
                            <form action="resumeUpdate.php" method = "post">
                                <?php
                                echo '<input type="hidden" name="id" class="form-control input-md" value="'.$row[0].'">'
                                ?>
                                        <?php
                                        echo '<input  name="title" type="text"class="form-control input-md" value="' . $row[2] . '">'
                                        ?>

                                <button type="submit" class="btn btn-primary btn-lg">送出</button>
                            </form>

                            <?php
                        }

                    }
                ?>
        </div>
    </div>
</div>


<!--        -
<!---->
<!---->
<!--<footer class="container-fluid text-center">-->
<!--    <p>Asia University Power by JiaEn</p>-->
<!--</footer>-->


</body>
</html>