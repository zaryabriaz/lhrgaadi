<?php
include"header.php";
include"footer.php";
?>
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

<?php

header_show();
?>

<div class="login_Container">
    <div >
        <h1 style="margin-top: 5%">Admin Panel</h1>
    </div>
    <br>
    <div>
        <a href="Admin_insert.php" class="login_Button Adminlogin_Button" style="text-decoration: none">Insert</a>
    </div>
    <br>
    <div>
        <a href="Admin_update.php" class="login_Button Adminlogin_Button" style="text-decoration: none">Update</a>
    </div>
    <br>
    <div>
        <a href="Admin_delete.php" class="login_Button Adminlogin_Button" style="text-decoration: none">Delete</a>
    </div>
    <br>
    <div>
        <a href="Admin_view.php" class="login_Button Adminlogin_Button" style="text-decoration: none">View</a>
    </div>

</div>
<?php
footer_show();
?>
?>
</body>
</html>