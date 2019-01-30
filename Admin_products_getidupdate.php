<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        ADMIN Getidforupdate
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
        if(isset($_POST['Button']))
        {
            $_SESSION['Pid']=$_POST['Getidforupdate'];
            header("location:Admin_products_update.php");
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
        <li_right_FP><a href="AdminproductPanel.php">AdminuserPanel</a></li_right_FP>
        <li_right_FP><a href="AdminLogout.php">Logout</a></li_right_FP>
        <li_right_FP><a href="login.php">Login</a></li_right_FP>
        <li_right_FP><a href="Signup.php">SignUp</a></li_right_FP>
    </ul>
</header>

<div class="login_Container">
    <div >
        <h1 style="margin-top: 5%">Enter product Id For Update</h1>
    </div>
    <br>
    <form action="Admin_products_getidupdate.php" method="POST">
        <div>
            <h2  style="color: white;">
                <input class ="login_form-control-my" type="text" id="Uid" name="Getidforupdate" placeholder="Id" required pattern="[0-9]+">
                &nbsp
                <i  class="fas fa-id" style="color: skyblue"></i>
            </h2>
        </div>
        <br>
        <div>
            <input  type="submit" class="login_Button Adminlogin_Button" name="Button" value="Getid">
            <!--<input  type="submit" class="login_Button Adminlogin_Button" name="Button" onclick="getDataUpdate(this.value)">-->
        </div>
    </form>

</div>
<footer class="navBT">
    <a href="contact.html">ContactUs</a>
    <a href="AboutUs.html">AboutUs</a>
</footer>

<!--<script type="text/javascript">

    function getDataUpdate(str)
    {
    //     console.log("before ajax");
    //     var ID = $('#Uid').val();
    //     alert(ID);
    //    productdata =
    //    {
    //        id:ID
    //    }

    // console.log("before ajax");
    //    $.ajax({
    //        type:"POST",
    //        url:"getDataProductAjax.php",
    //        data:productdata,
    //        dataType:"html",
    //        success:function (data) {
    //            //$("#datahere").html(data);
    //        document.getElementById('datahere').innerHTML = data;

    //        }
    //    });

console.log("before ajax");
       var xml = new XMLHttpRequest();
       xml.onreadystatechange = function()
       {
        if(this.readyState ==4 && this.status == 200)
        {
         document.getElementById('datahere').innerHTML = this.responseText;
        }
       };

       xml.open("GET","getDataProductAjax.php?e="+str,true);
       xml.send();


    }


</script>-->

</body>
</html>