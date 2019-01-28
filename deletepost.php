<?php
/**
 * Created by PhpStorm.
 * User: zaryab
 * Date: 1/21/2019
 * Time: 10:28 AM
 */
include"header.php";
include"footer.php";
require"connection/db_connection.php";
if(isset($_POST['submit']))
{
    $username=$_POST['UserName'];
    $password=$_POST['Password'];
    $adid=$_POST['AdId'];
    $query="select * from Registration where UserName='$username' and Password='$password'";
    $rows=mysqli_query($con,$query);
    $count=mysqli_num_rows($rows);
    if($count>0)
    {
        $query="DELETE from Adds where Aid='$adid'";
        if($con->query($query) === TRUE)
        {
            echo "Delete Ad Successfully!!";
        }
        else{
            echo " id not exist";
        }

    }
    else{

            echo ("write username and password correctly please");

    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DELETE YOUR ADD</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
</head>
<body>
<?php
header_show();
?>
<div id="addpost-body">


    <h1 id="mainheading-addpost">Delete your add</h1>
    <form  id="addpost-form" method="post" action="deletepost.php" >



        <div>
            <label>AD ID:</label>
            <input type="text" name="AdId">
        </div>
        <div>
            <label>UserName:</label>
            <input type="text" name="UserName">
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="Password">
        </div>

        <input type="submit" name="submit">
        <a href="loginenter.php">Press for home page of your Account"</a>
    </form>
</div>
<?php
footer_show();
?>
</body>
