<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        PRODUCTS INSERT
    </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="description" content="Login">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Hammad Mubeen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    session_start();
    if(isset($_SESSION['adminloginusername']))
    {
        if(isset($_POST['Insert_Button']))
        {
            $Car_Model=$_POST['Car_Model'];
            $Car_Make=$_POST['Car_Make'];
            $Car_Price=$_POST['Car_Price'];
            $Car_Username=$_POST['Car_Username'];
            $Car_Name=$_POST['Car_Name'];
            $Car_Email=$_POST['Car_Email'];
            $Car_PhoneNumber=$_POST['Car_PhoneNumber'];
            $Car_Details=$_POST['Car_Details'];
            require "connection/db_connection.php";
            $select="SELECT * FROM `adds`";
            $selectquery=mysqli_query($con,$select);
            $check=0;
            while($row=mysqli_fetch_array($selectquery))
            {
                $db_Model=$row['Model'];
                if($db_Model==$Car_Model)
                {
                    echo '<script language="javascript">';
                    echo 'alert("Model already exits.")';
                    echo '</script>';
                    $check=0;
                    break;
                }
                else
                {
                    $check=1;
                }
            }
            if($check==1)
            {
                $insert="INSERT INTO `adds` (`Aid`, `Model`, `Make`, `Price`, `Username`, `Name`, `Email`, `PhoneNumber`, `Details`) VALUES (NULL,'$Car_Model','$Car_Make','$Car_Price','$Car_Username','$Car_Name','$Car_Email','$Car_PhoneNumber','$Car_Details')";
                $insertquery=mysqli_query($con,$insert);
            }

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
        <h1 style="margin-top: 1%">Insert</h1>
    </div>
    <form action="Admin_products_insert.php" method="POST">
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text"  name="Car_Model" placeholder="Model" required pattern="[a-zA-Z][a-zA-Z][a-zA-Z\s]+$">
                &nbsp
                <i class="fas fa-car-side" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text"  name="Car_Make" placeholder="Make" required pattern="[a-zA-Z][a-zA-Z][a-zA-Z\s]+$">
                &nbsp
                <i  class="fab fa-tumblr" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="number"  name="Car_Price" placeholder="Price" required pattern="[0-9]+">
                &nbsp
                <i class="fas fa-dollar-sign" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text"  name="Car_Username" placeholder="Username" required pattern="[^\s]+">
                &nbsp
                <i  class="fas fa-user-circle" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text"  name="Car_Name" placeholder="Name" required pattern="[a-zA-Z][a-zA-Z][a-zA-Z\s]+$">
                &nbsp
                <i  class="fas fa-user" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="email"  name="Car_Email" placeholder="Email" required>
                &nbsp
                <i  class="fas fa-envelope" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text"  name="Car_PhoneNumber" placeholder="PhoneNumber" required pattern="(03[0-4][0-9][-,\s]?[0-9]{7})">
                &nbsp
                <i  class="fas fa-phone" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text"  name="Car_Details" placeholder="Details" required pattern="[a-zA-Z][a-zA-Z][a-zA-Z\s]+$">
                &nbsp
                <i class="fas fa-info-circle" style="color: skyblue;"></i>
            </h2>
        </div>
        <div>
            <input  type="submit" class="login_Button Adminlogin_Button" value="Insert" name="Insert_Button">
        </div>
    </form>
</div>
<footer class="navBT">
    <a href="contact.html">ContactUs</a>
    <a href="AboutUs.html">AboutUs</a>
</footer>
</body>
</html>