<?php
if(isset($_POST['Change_Password_Button'])) {
    echo "isset";
    $EMAIL = $_POST['CP_email_input'];
    $PASSWORD = $_POST['CP_password_input'];
    $CONFIRM_PASSWORD = $_POST['CP_confirm_password_input'];

    require "connection/db_connection.php";

    $select = "select * from sign_up";
    $query1 = mysqli_query($con, $select);
    $check = 0;
    $row = mysqli_fetch_array($query1);
    while ($row = mysqli_fetch_array($query1)) {
        echo "While loop";
        $email = $row['Email'];
        $password = $row['Password'];
        if (($email != $EMAIL)) {
            echo '<script language="javascript">';
            echo 'alert("Email does not exist")';
            echo '</script>';
            $check = 1;
            break;
        } else if (($password == $PASSWORD)) {
            echo '<script language="javascript">';
            echo 'alert("Password already exists")';
            echo '</script>';
            $check = 2;
            break;
        } else
            $check = 3;
    }

    if ($check == 3) {
        echo "check = 3";
        $sql = "SELECT Email FROM sign_up";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $emailFromDb = $row{'Email'};
            $EMAIL = $_POST['CP_email_input'];
            if ($emailFromDb == $EMAIL) {
                if ($PASSWORD == $CONFIRM_PASSWORD) {
                    echo "pass matched";
                    $insert = "insert into sign_up(Password,ConfirmPassword) values($PASSWORD','$CONFIRM_PASSWORD)";
                    $query2 = mysqli_query($con, $insert);
                } else {
                    echo '<script language="javascript">';
                    echo 'alert("Password and Confirm Password not matched:")';
                    echo '</script>';
                }
            }
        }
    }
}
?>
<head>
    <title>Change Password Form</title>
    <meta charset="utf-8">
    <meta name="description" content="change Password">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Areej">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    <style></style>
</head>
<body>
<header class="Head">
    <ul class ="ul-FP">
        <b><li_home_FP><a class="active" href="index.html"><i class="fas fa-home"></i><em> LhrGaddi</em></a></li_home_FP></b>
        <li_right_FP><a href="login.html">Login</a></li_right_FP>
        <li_right_FP><a href="Signup.html">SignUp</a></li_right_FP>
    </ul>
</header>
<div class="bg_forgotPassword container-fluid text_color_forgotPassword ">
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12 col-xl-4 col-lg-4"></div>
        <div class="col-xs-12 col-sm-6 col-xs-12 col-xl-4 col-lg-4">
            <form class="form-container_forgotPassword">
                <h4>
                    Change Password:
                </h4>
                <div class="form-group_forgotPassword">
                    <label for="exampleEmail">Email</label>
                    <input type="text" class="form-control" id="exampleEmail" name="CP_email_input" placeholder="Enter Email">

                </div>
                <div class="form-group_forgotPassword">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="CP_password_input" placeholder="Enter Password"required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">

                </div>
                <div class="form-group_forgotPassword">
                    <label for="exampleInputPassword3">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword3" name = "CP_confirm_password_input" placeholder="Confirm Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
                </div>
                <input type="submit" class="btn btn-success btn-block" value="Submit" name="Change_Password_Button">
            </form>
        </div>
        <div class="col-md-9 col-sm-3 col-xs-12 col-xl-4 col-lg-4"></div>
    </div>
</div>
<div class="navBT">
    <a href="contact.html">ContactUs</a>
    <a href="AboutUs.html">AboutUs</a>
</div>
</body>