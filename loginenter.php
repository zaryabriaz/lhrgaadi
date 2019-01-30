<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to your account</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="description" content="Login">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="zaryab" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header class="Head">
    <ul class ="ul-FP">
        <b><li_home_FP><a class="active" href="index.php"><i class="fas fa-home"></i><em> LhrGaddi</em></a></li_home_FP></b>
        <li_right_FP><a href="login.php">Login</a></li_right_FP>
        <li_right_FP><a href="Signup.php">SignUp</a></li_right_FP>
    </ul>
</header>
<div id="account-body">
    <div class="login_Container">


        <h1 id="main-heading">welcome to your account </h1>
    <?php
    $user=$_SESSION["loginusername"];
//    echo $user;
    require "connection/db_connection.php";
    $select="select Name from sign_up where Username='$user'";
    $query=mysqli_query($con,$select);
    $row=mysqli_fetch_array($query);
    echo '<h2>'; echo $row['Name'] ;echo'</h2>'


    ?>

    <div>

        <a href="addpost.php" class="login_Button Adminlogin_Button" style="text-decoration: none">Post your Ad</a>
    </div>
    <br>

    <div>
        <a href="deletepost.php" class="login_Button Adminlogin_Button" style="text-decoration: none">Delete your Ad</a>
    </div>
    <br>
    <div>
        <a href="showpost.php" class="login_Button Adminlogin_Button" style="text-decoration: none">Show my Ads</a>
    </div>

</div>
</div>
</div>
<footer class="navBT">
    <a href="contact.html">ContactUs</a>
    <a href="AboutUs.php">AboutUs</a>
</footer>

</body>
</html>