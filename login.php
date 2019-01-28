<?php
session_start();
include("header.php");
include("footer.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        LOGIN
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

    /**
     * Created by PhpStorm.
     * User: zaryab
     * Date: 1/21/2019
     * Time: 9:44 PM
     */
    $result=0;
    //$username=$_POST['Username'];
    //echo $username;
    if(isset($_POST['login-bttn']))
    {
//        echo "enter";

        $username=$_POST['Username'];
        $password=$_POST['Password'];
        require "connection/db_connection.php";
        $select="select * from sign_up";
        $query=mysqli_query($con,$select);
        while($row=mysqli_fetch_array($query))
        {
            $db_Username=$row['Username'];
            $db_Password=$row['Password'];
            if($username==$db_Username)
            {
                if($password==$db_Password)
                {
                    $result=1;
                    $_SESSION["User"]=$username;
                    header("Location:loginenter.php");
                    break;
                }
                $result=2;
            }
        }
        if($result==2)
        {
            echo '<script language="javascript">';
            echo 'alert("Password is wrong")';
            echo '</script>';
        }
        else if ($result==0)
        {
            echo '<script language="javascript">';
            echo 'alert("Username and Password are wrong")';
            echo '</script>';
        }
    }
    ?>

</head>
<body>
<?php
header_show();
?>

<div class="login_Container">
    <div class="login_Background" >
                <header>
                        <div >
                            <br><br><br><br><br><br>
                            <h1>
                                <i class="login_animation" style="cursor: none;color: white;">Login</i>
                            </h1>	<br>
                        </div>
                </header>
                <form method="post" action="login.php">
                <div class="login_content">
                    <div>
                            <h2  style="color: white;">
                                <input type="text"  name="Username" class ="login_form-control-my"   placeholder="Enter Your Username  ">
                                &nbsp
                                <i  class="fas fa-user" style="color: skyblue"></i>
                            </h2>
                        </div>
                            <br>
                    <div>
                        <h2 style="color: white;">
                            <input type="password" name="Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" class ="login_form-control-my" placeholder="Enter Your Password">
                            &nbsp
                            <i class="fas fa-lock" style="color: skyblue"></i>
                        </h2>
                    </div>
                    <br>
                </div>
                <footer>
                        <div>
                            <input type="submit" name="login-bttn" class="login_Button login_Button1">
<!--                            <a href="loginenter.html" class="login_Button login_Button1">Login</a>-->
                            <a href="change%20password.html" class="login_Button login_Button2">Forget Password</a>
                        </div>
                </footer>
                </form>


        <?php
        footer_show();
        ?>
</body>
</html>