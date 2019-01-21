<?php
/**
 * Created by PhpStorm.
 * User: zaryab
 * Date: 1/20/2019
 * Time: 10:52 AM
 */
require"connection/db_connection.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST YOUR ADD</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
</head>
<body>
<div id="addpost-body">
    <b><li_home_FP><a class="active" href="index.html"><i class="fas fa-home"></i><em> LhrGaddi</em></a></li_home_FP></b>

    <h1 id="mainheading-addpost">post your add</h1>
    <form  id="addpost-form" method="post" action="uploadadd.php" >
        <div>
        <label>Model:</label>
        <input type="text" name="Model" >
        </div>
        <div>
        <label>Make  :</label>
        <input type="text" name="Make" >
        </div>
        <div>
        <label>Details:</label>
        <input type="text" name="Details" >
        </div>
        <div>
        <label>Price    :</label>
        <input type="text" name="Price" >
        </div>
        <label>Image:</label>
        <input type="file" name="Image"/>
        <div>
            <label>Name:</label>
            <input type="text" name="Name">
        </div>
        <div>
            <label>UserName:</label>
            <input type="text" name="Name">
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="Password">
        </div>
        <div>
            <label>Email:</label>
            <input type="text" name="Email">
        </div>
        <div>
            <label>Phone#:</label>
            <input type="text" name="PhoneNumber">
        </div>
        <input type="submit" name="submit">
    </form>
</div>
</body>

