<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Show Ads
    </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="description" content="Login">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php


/**
 * Created by PhpStorm.
 * User: zaryab
 * Date: 1/21/2019
 * Time: 4:33 PM
 */

    session_start();

    require "connection/db_connection.php";
    include"header.php";
    include"footer.php";
    $user = $_SESSION["loginusername"];
//echo"$user";
    $query = "select * from adds where Username='$user'";

    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 0) {
        echo "<script>";
        echo 'alert(" no ad on your Account")';
        echo "</script>";
    } else {

        while ($rows = mysqli_fetch_assoc($result)) {
            $aid = $rows['Aid'];
            $model = $rows['Model'];
            $make = $rows['Make'];
            $price = $rows['Price'];
            $details = $rows['Details'];
            $img = $rows['Images'];

            echo "
                    <div style='height:80%;' id='showpost'>
                    <img src='Admin/addimages/$img' alt='car picture'>
                    <br>
                    <label>Model:</label>
                    <h2>$model</h2>
                    AdID:<h2>$aid</h2>
                    Make:<h2>$make</h2>
                    Price:<h2>$price</h2>
                    Details:<h2>$details</h2>
                    </div>
        ";
        }
    }

?>
<body>

<?php
echo'<div  style ="height: 20%;" class="navBT">';
echo" <a href='loginenter.php'>Back</a>";
?>
</body>
