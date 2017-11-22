<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:09
 */
$var=105021056;
$n = $_POST[n];
$m = $_POST[m];
$R = $_POST[r];
$G = $_POST[g];
$B = $_POST[b];



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

</head>
<body>
<?php
echo "<h1>$var</h1>"
?>
<table border="1" width="100px" align="center">
    <?php
    for($i = 1;$i<=$n;$i++){
        echo "<tr align='center'><span style='background: rgb($R,$G,$B)'>";
        for($j = 1;$j<=$m;$j++){
            echo"<span style='font-size:2em'><td>".$i*$j."</td></span>";
        }
        echo "</span></tr>";
    }
    ?>
</table>

<table>
    <?php
        echo"<h1><span style='background: rgb($R,$G,$B)'>123</span></h1>"
    ?>
</table>

</body>
</html>
