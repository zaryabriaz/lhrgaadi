<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        ADMIN PANEL
    </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="description" content="Login">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Hammad Mubeen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<header class="Head">
    <ul class ="ul-FP">
        <b><li_home_FP><a class="active" href="index.php"><i class="fas fa-home"></i><em> LhrGaddi</em></a></li_home_FP></b>
        <li_right_FP><a href="AdminPanel.php">AdminPanel</a></li_right_FP>
        <li_right_FP><a href="login.php">Login</a></li_right_FP>
        <li_right_FP><a href="Signup.php">SignUp</a></li_right_FP>
    </ul>
</header>

<div class="login_Container">
    <div >
        <h1 style="margin-top: 5%">Users</h1>
    </div>
    <br>
    <div>
        <a href="Admin_users_insert.php" class="login_Button Adminlogin_Button" style="text-decoration: none">Insert</a>
    </div>
    <br>
    <div>
        <a href="Admin_users_getidupdate.php" class="login_Button Adminlogin_Button" style="text-decoration: none">Update</a>
    </div>
    <br>
    <div>
        <a href="Admin_users_delete.php" class="login_Button Adminlogin_Button" style="text-decoration: none">Delete</a>
    </div>
    <br>
    <div>
        <a href="Admin_users_view.php" class="login_Button Adminlogin_Button" style="text-decoration: none">View</a>
    </div>

</div>
<footer class="navBT">
    <a href="contact.html">ContactUs</a>
    <a href="AboutUs.html">AboutUs</a>
</footer>
</body>
</html>