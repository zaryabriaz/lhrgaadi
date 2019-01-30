<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        PRODUCTS UPDATE
    </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="description" content="Login">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Hammad Mubeen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php
    session_start();
    if(isset($_SESSION['adminloginusername']))
    {
        $PID=$_SESSION['Pid'];
        require "connection/db_connection.php";
        $select="Select * from `adds` where `Aid` = '$PID'";
        $query=mysqli_query($con,$select);
        $row=mysqli_fetch_array($query);
        $Car_Model = $row['Model'];
        $Car_Make = $row['Make'];
        $Car_Price= $row['Price'];
        $Car_Username = $row['Username'];
        $Car_Name= $row['Name'];
        $Car_Email = $row['Email'];
        $Car_PhoneNumber = $row['PhoneNumber'];
        $Car_Details = $row['Details'];
        if(isset($_POST['Update_Button']))
        {
            $Car_Model=$_POST['Car_Model'];
            $Car_Make=$_POST['Car_Make'];
            $Car_Price=$_POST['Car_Price'];
            $Car_Username=$_POST['Car_Username'];
            $Car_Name=$_POST['Car_Name'];
            $Car_Email=$_POST['Car_Email'];
            $Car_PhoneNumber=$_POST['Car_PhoneNumber'];
            $Car_Details=$_POST['Car_Details'];
            require "connection/db_connection.php";
            $update="UPDATE `adds` SET `Model`='$Car_Model',`Make`='$Car_Make',`Price`='$Car_Price',`Username`='$Car_Username',`Name`='$Car_Name',`Email`='$Car_Email',`PhoneNumber`='$Car_PhoneNumber',`Details`='$Car_Details' WHERE `Aid` = '$PID'";
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
        <li_right_FP><a href="AdminproductPanel.php">AdminproductPanel</a></li_right_FP>
        <li_right_FP><a href="login.php">Login</a></li_right_FP>
        <li_right_FP><a href="Signup.php">SignUp</a></li_right_FP>
    </ul>
</header>

<div class="login_Container">
    <div >
        <h1>Update</h1>
    </div>
    <form action="Admin_products_update.php" method="POST">
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text" id="Pmodel" name="Car_Model" value="<?php echo $Car_Model;?>" required pattern="[a-zA-Z][a-zA-Z][a-zA-Z\s]+$">
                &nbsp
                <i class="fas fa-car-side" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text" id="Pmake" name="Car_Make" value="<?php echo $Car_Make;?>" required pattern="[a-zA-Z][a-zA-Z][a-zA-Z\s]+$">
                &nbsp
                <i  class="fab fa-tumblr" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="number"  id="Pprice" name="Car_Price" value="<?php echo $Car_Price;?>" required pattern="[0-9]+">
                &nbsp
                <i class="fas fa-dollar-sign" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text" id="Puser" name="Car_Username" value="<?php echo $Car_Username;?>" required pattern="[^\s]+">
                &nbsp
                <i  class="fas fa-user-circle" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text" id="Pname" name="Car_Name" value="<?php echo $Car_Name;?>" required pattern="[a-zA-Z][a-zA-Z][a-zA-Z\s]+$">
                &nbsp
                <i  class="fas fa-user" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="email" id="Pemail" name="Car_Email" value="<?php echo $Car_Email;?>" required>
                &nbsp
                <i  class="fas fa-envelope" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text" id="Pnumber" name="Car_PhoneNumber" value="<?php echo $Car_PhoneNumber;?>" required pattern="(03[0-4][0-9][-,\s]?[0-9]{7})">
                &nbsp
                <i  class="fas fa-phone" style="color: skyblue"></i>
            </h2>
        </div>
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text" id="Pdetails" name="Car_Details" value="<?php echo $Car_Details;?>" required pattern="[a-zA-Z][a-zA-Z][a-zA-Z\s]+$">
                &nbsp
                <i class="fas fa-info-circle" style="color: skyblue;"></i>
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
<!--<script>
   function Getdata()
   {
       //var ID =document.getElementById("Pid").value;

    console.log("before ajax");
       var ID = $('#Pid').val();
alert(ID);
       productdata =
       {
           id:ID
       }

    console.log("before ajax");
       $.ajax({
           type:"POST",
           url:"getDataProductAjax.php",
           data:productdata,
           dataType:"html",
       });

        //alert(id);
       /*$username = $row['Make'];
       $email = $row['Email'];
       $password = $row['Password'];
       $confirmpassword = $row['ConfirmPassword'];
       $address = $row['Address'];
       $mobilenumber = $row['Mobile_Number'];*/

   }
</script>-->
</body>
</html>