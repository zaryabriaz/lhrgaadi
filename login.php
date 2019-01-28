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
    session_start();
    if(isset($_SESSION['loginusername']))
    {
        echo '<script language="javascript">';
        echo 'alert("Someone already logged in. Log out first.")';
        echo '</script>';
    }
    else
    {
        if(isset($_POST['Login_Button']))
        {
            $username=$_POST['Login_Username'];
            $password=$_POST['Login_Password'];

            $result = 0;

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
                        $_SESSION["loginusername"] = $username;
                        header("Location:index.php");
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
    }

    ?>
</head>
<body>
<header class="Head">
    <ul class ="ul-FP">
        <b><li_home_FP><a class="active" href="index.php"><i class="fas fa-home"></i><em> LhrGaddi</em></a></li_home_FP></b>
        <li_right_FP><a href="UserLogout.php">Logout</a></li_right_FP>
        <li_right_FP><a href="login.php">Login</a></li_right_FP>
        <li_right_FP><a href="Signup.php">SignUp</a></li_right_FP>
    </ul>
</header>

<div class="login_Container">
    <div class="login_Background" >
                        <div >
                            <br><br><br><br><br><br>
                            <h1>
                                <i class="login_animation" style="cursor: none;color: white;">Login</i>
                            </h1>	<br>
                        </div>
                <form action="login.php" method="POST">
                <div class="login_content">
                    <div>
                            <h2  style="color: white;">
                                <input class ="login_form-control-my" type="text"  name="Login_Username" placeholder="Enter Your Username" required pattern="[^\s]+">
                                &nbsp
                                <i  class="fas fa-user" style="color: skyblue"></i>
                            </h2>
                        </div>
                            <br>
                    <div>
                        <h2 style="color: white;">
                            <input class ="login_form-control-my" type="password" name="Login_Password" placeholder="Enter Your Password" required pattern="^(?=.*\d)(?=.*[a-z](?=.*[A-Z](?!.*\s).*$">
                            &nbsp
                            <i class="fas fa-lock" style="color: skyblue"></i>
                        </h2>
                    </div>
                    <br>
                </div>
                        <div>
                            <input  type="submit" class="login_Button login_Button1" value="Submit" name="Login_Button">
                            <a href="change%20password.html" class="login_Button login_Button1" style="text-decoration: none">Forget Password</a>
                        </div>
                </form>


            </div>

    </div>
<div class="navBT">
    <a href="contact.html">ContactUs</a>
    <a href="AboutUs.html">AboutUs</a>
</div>
</body>
</html>