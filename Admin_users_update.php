<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        ADMIN UPDATE
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
        $ID=$_SESSION['Uid'];
        require "connection/db_connection.php";
        $select="Select * from `sign_up` where `id` = '$ID'";
        $query=mysqli_query($con,$select);
        $row=mysqli_fetch_array($query);
        $name = $row['Name'];
        $username = $row['Username'];
        $email = $row['Email'];
        $password = $row['Password'];
        $confirmpassword = $row['ConfirmPassword'];
        $address = $row['Address'];
        $mobilenumber = $row['Mobile_Number'];
        if(isset($_POST['Update_Button']))
        {
            $name=$_POST['Login_Name'];
            $username=$_POST['Login_Username'];
            $email=$_POST['Login_Email'];
            $password=$_POST['Login_Password'];
            $confirmpassword=$_POST['Login_Confirm_Password'];
            $address=$_POST['Login_Address'];
            $mobilenumber=$_POST['Login_Mobile_Number'];
            require "connection/db_connection.php";
            $update="UPDATE `sign_up` SET `Name`='$name',`Username`='$username',`Email`='$email',`Password`='$password',`ConfirmPassword`='$confirmpassword',`Address`='$address',`Mobile_Number`='$mobilenumber' WHERE `id` = '$ID'";
            $query=mysqli_query($con,$update);
        }
    }
    else{
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
        <li_right_FP><a href="AdminuserPanel.php">AdminuserPanel</a></li_right_FP>
        <li_right_FP><a href="AdminLogout.php">Logout</a></li_right_FP>
        <li_right_FP><a href="login.php">Login</a></li_right_FP>
        <li_right_FP><a href="Signup.php">SignUp</a></li_right_FP>
    </ul>
</header>

<div class="login_Container">
    <div >
        <h1 style="margin-top: 1px">Update</h1>
    </div>
    <form action="Admin_users_update.php" method="POST">

        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text"  name="Login_Name" value="<?php echo $name;?>" required pattern="[a-zA-Z][a-zA-Z][a-zA-Z\s]+$">
                &nbsp
                <i  class="fas fa-user-circle" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text"  name="Login_Username" value="<?php echo $username;?>" required pattern="[^\s]+">
                &nbsp
                <i  class="fas fa-user" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="email"  name="Login_Email" value="<?php echo $email;?>" required >
                &nbsp
                <i  class="fas fa-envelope" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="password"  name="Login_Password" value="<?php echo $password;?>" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
                &nbsp
                <i  class="fas fa-lock" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="password"  name="Login_Confirm_Password" value="<?php echo $confirmpassword;?>" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
                &nbsp
                <i  class="fas fa-key" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text"  name="Login_Address" value="<?php echo $address;?>" required pattern="\d+-?\s?[a-zA-Z]-?\s?[a-zA-z]+\s[a-zA-z]+">
                &nbsp
                <i  class="fas fa-map-marker-alt" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text"  name="Login_Mobile_Number" value="<?php echo $mobilenumber;?>" required pattern="(03[0-4][0-9][-,\s]?[0-9]{7})">
                &nbsp
                <i  class="fas fa-phone" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <input  type="submit" class="login_Button Adminlogin_Button" value="Update" name="Update_Button">
        </div>
    </form>
</div>
<footer class="navBT">
    <a href="contact.html">ContactUs</a>
    <a href="AboutUs.html">AboutUs</a>
</footer>
</body>
</html>