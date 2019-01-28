<?php
/**
 * Created by PhpStorm.
 * User: zaryab
 * Date: 1/20/2019
 * Time: 10:52 AM
 */
include"header.php";
include"footer.php";
session_start();
        /*
         * Insert image data into database
         */
require "connection/db_connection.php";
if(isset($_POST["submit"]) ) {
//    $file_temp = $_FILES['file']['tmp_name'];
//    $info = getimagesize($file_temp);
//    && isset($_FILES['file'])
    //Insert image content into database
    $model=$_POST['Model'];
    $make=$_POST['Make'];
    $price=$_POST['Price'];
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $username=$_SESSION['User'];
    $phonenumber=$_POST['PhoneNumber'];
    $details=$_POST['Details'];
    if(isset($_FILES['image'])) {
        $pro_image= $_FILES['image']['name'];

//        echo '$pro_image'; ;
        $pro_image_tmp = $_FILES["image"]["tmp_name"];
//    print_r($_FILES);
        move_uploaded_file($pro_image_tmp, "Admin/addimages/$pro_image");
    }
    $query="insert into adds (Model,Make,Price,Username,Name,Email,PhoneNumber,Details,Images) values
    ('$model','$make','$price','$username','$name','$email','$phonenumber','$details','$pro_image')";
//    '$info'
    $insert = mysqli_query($con,$query );
//    "INSERT into adds (images) VALUES '$imgContent'"
    if ($insert) {
        echo '<script language="javascript">';
        echo 'alert("Ad uploaded successfully.")';
        echo '</script>';
        //header("location:loginenter.html");

        //  echo "Ad uploaded successfully.";
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("File upload failed.")';
        echo '</script>';
        }
    }
    else{

        echo '<script language="javascript">';
      //  echo 'alert("Please select an image file to upload.")';
        echo '</script>';
    }

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
<?php
header_show();
?>

<div id="addpost-body">

    <div style="align-content: center; " class="login_Container">
    <h1 id="mainheading-addpost">post your add</h1>
    <form  id="addpost-form" method="post" action="addpost.php" enctype="multipart/form-data" >
        <div>
        <label>Model:</label>
        <input  type="text" style="input:valid{background-color:green;} " name="Model" required pattern="[a-zA-Z]+[\s]+" >
        </div>
        <div>
        <label>Make  :</label>
        <input type="text" name="Make" required pattern="[a-zA-Z]{5-50}" >
            &nbsp
        </div>
        <div>
        <label>Details:</label>
        <input type="text" name="Details"required pattern="[a-zA-Z]{20-100}" >
        </div>
        <div>
        <label>Price    :</label>
        <input type="text" name="Price" required pattern="^[1-9][0-9]+">
        </div>
        <label style="margin-left:100px;">Image    :</label>
        <input style="margin-left:10px" type="file" name="image"/>
        <div>
            <label>Name:</label>
            <input type="text" name="Name" required pattern="[a-zA-Z]{5-40}">
        </div>
        <div>
            <label>Email:</label>
            <input type="text" name="Email" required pattern="^\w+[\w-\.]*\@\w+((-\w+)|(\w*))\.[a-z]{2,3}$">
        </div>
        <div>
            <label>Phone#:</label>
            <input type="text" name="PhoneNumber" required pattern="(03[0-4][0-9][-,\s]?[0-9]{7})|(0092-[0-9]{10})|(+92-32[0-9]{8})">
        </div>
        <input type="submit" name="submit">
        <a href="loginenter.php">Press for home page of your Account"</a>
    </form>
</div>
</div>
<?php
footer_show();
?>
</body>

