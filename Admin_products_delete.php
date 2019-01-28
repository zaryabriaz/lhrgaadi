<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        PRODUCTS DELETE
    </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="description" content="Login">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Hammad Mubeen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    session_start();
    if(isset($_SESSION['adminloginusername']))
    {
        if(isset($_POST['Delete_Button']))
        {
            require "connection/db_connection.php";
            $Car_Model=$_POST['Car_Model'];
            $delete="DELETE FROM `adds` WHERE Model = '$Car_Model'";
            $query=mysqli_query($con,$delete);
        }
    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("Login admin first.")';
        echo '</script>';
    }
    ?>
</head>
<body>

<header class="Head">
    <ul class ="ul-FP">
        <b><li_home_FP><a class="active" href="index.php"><i class="fas fa-home"></i><em> LhrGaddi</em></a></li_home_FP></b>
        <li_right_FP><a href="AdminproductPanel.php">AdminproductPanel</a></li_right_FP>
        <li_right_FP><a href="login.php">Login</a></li_right_FP>
        <li_right_FP><a href="Signup.php">SignUp</a></li_right_FP>
    </ul>
</header>

<div class="login_Container">
    <div >
        <h1 style="margin-top: 5%">Delete</h1>
    </div>
    <br>
    <form action="Admin_products_delete.php" method="POST">
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text"  name="Car_Model" placeholder="Model" required pattern="[a-zA-Z][a-zA-Z][a-zA-Z\s]+$">
                &nbsp
                <i class="far fa-car" style="color: skyblue"></i>
            </h2>
        </div>
        <br>
        <div>
            <input  type="submit" class="login_Button Adminlogin_Button" value="Delete" name="Delete_Button">
        </div>
    </form>

</div>
<footer class="navBT">
    <a href="contact.html">ContactUs</a>
    <a href="AboutUs.html">AboutUs</a>
</footer>
</body>
</html>