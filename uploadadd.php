<?php

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
    $phonenumber=$_POST['PhoneNumber'];
    $details=$_POST['Details'];

    $query="insert into adds (Model,Make,Price,Name,Email,PhoneNumber,Details) values
    ('$model','$make','$price','$name','$email','$phonenumber','$details')";
//    '$info'
    $insert = mysqli_query($con,$query );
//    "INSERT into adds (images) VALUES '$imgContent'"
    if ($insert) {

        echo "Ad uploaded successfully.";
        //header("location:loginenter.html");

        //  echo "Ad uploaded successfully.";
    }
    else{
            echo "File upload failed, please try again.";
        }
    }
    else{
        echo "Please select an image file to upload.";
    }

?>