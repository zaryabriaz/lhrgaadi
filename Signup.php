<!DOCTYPE html>
<html lang="en">
<head>
	<div class="bg">
		<title>Signup</title>
		<meta charset="utf-8">
		<meta name="description" content="signup">
		<meta name="keywords" content="HTML,CSS,XML,JavaScript">
		<meta name="author" content="Zain ali">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link href="bootstrap.css" rel="stylesheet" type="text/css" href="css/glyphicon">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	</div>

	<?php
    session_start();
    if(isset($_SESSION['loginusername']))
    {
        echo '<script language="javascript">';
        echo 'alert("Someone already logged in. Log out first.")';
        echo '</script>';
    }
    else
    {
        if(isset($_POST['Sign_up_Button']))
        {
            $name=$_POST['Sign_up_Name'];
            $username=$_POST['Sign_up_Username'];
            $email=$_POST['Sign_up_Email'];
            $password=$_POST['Sign_up_Password'];
            $confirmpassword=$_POST['Sign_up_Confirm_Password'];
            $address=$_POST['Sign_up_Address'];
            $mobilenumber=$_POST['Sign_up_Mobile_Number'];

            require "connection/db_connection.php";
            require "connection/db_connection.php";
            $select="SELECT * FROM `sign_up`";
            $selectquery=mysqli_query($con,$select);
            $check=0;
            while($row=mysqli_fetch_array($selectquery))
            {
                $db_Username=$row['Username'];
                $db_Email=$row['Email'];
                $db_Mobile_Number=$row['Mobile_Number'];
                if($db_Username==$username || $db_Email==$email || $db_Mobile_Number==$mobilenumber)
                {
                    echo '<script language="javascript">';
                    echo 'alert("Username or Email or Mobile number already exits.")';
                    echo '</script>';
                    $check=0;
                    break;
                }
                else
                {
                    $check=1;
                }
            }
            if($check==1)
            {
                if($password==$confirmpassword)
                {
                    $insert="INSERT INTO `sign_up` (`id`, `Name`, `Username`, `Email`, `Password`, `ConfirmPassword`, `Address`, `Mobile_Number`) VALUES (NULL,'$name','$username','$email','$password','$confirmpassword','$address','$mobilenumber')";
                    $insertquery=mysqli_query($con,$insert);
                }
                else
                {
                    echo '<script language="javascript">';
                    echo 'alert("Password and Confirm Password are not matched.")';
                    echo '</script>';
                }
            }
        }
    }

	?>
</head>
<header class="Head">
	<ul class ="ul-FP">
		<b><li_home_FP><a class="active" href="index.php"><i class="fas fa-home"></i><em> LhrGaddi</em></a></li_home_FP></b>
        <li_right_FP><a href="UserLogout.php">Logout</a></li_right_FP>
		<li_right_FP><a href="login.php">Login</a></li_right_FP>
		<li_right_FP><a href="Signup.php">SignUp</a></li_right_FP>
	</ul>
</header>
<body class="bgimg-signup">
<div class="container-fluid">

	<center>
		<b class="rform-signup"><font size="6" >Registration Form</font></b>
	</center>

	<div class="row ">
		<div class="col-12 offset-md-4 borderr col-md-4 col-sm-12 login-signup">
			<font size="5">
				<form action="Signup.php" method="POST">
					<div class="form-group ">
						<i class="fas fa-user-circle" style="color: white"></i>
						<label class="user-signup">Name:</label>
						<input class="in" type="text" class="form-control" id="text" name="Sign_up_Name" placeholder="Enter Real Name" required pattern="[a-zA-Z][a-zA-Z][a-zA-Z\s]+$">
					</div>

					<div class="form-group">
						<i class="far fa-user" style="color: white"></i>
						<label class="user-signup">Username:<br></label>
						<input class="in"  type="text" class="form-control" id="text1-signup" name="Sign_up_Username" placeholder="Enter Username" required pattern="[^\s]+">

					</div>

					<div class="form-group">
						<i class="far fa-envelope" style="color: white"></i>
						<label class="user-signup">Email:</label>
						<input class="in"  type="email" class="form-control" id="text2-signup" name="Sign_up_Email" placeholder="Enter Email" required>
					</div>

					<div class="form-group">
						<i class="fas fa-key" style="color: white"></i>
						<label class="user-signup">Password:</label>
						<input class="in"  type="password" class="form-control" id="text3" name="Sign_up_Password" placeholder="Enter Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
					</div>


					<div class="form-group">
						<i class="fas fa-key" style="color: white"></i>
						<i class="fas fa-key" style="color: white"></i>
						<label class="user-signup">Confirm Password:</label>
						<input class="in" type="password" class="form-control" id="text4" name="Sign_up_Confirm_Password" placeholder="Confirm Password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
					</div>

					<div class="form-group">
						<i class="fas fa-map-marker-alt" style="color: white"></i>
						<label class="user-sigunp">Address:</label>
						<input class="in"  type="text" class="form-control" id="text6" name="Sign_up_Address" placeholder="Enter Address" required pattern="\d+-?\s?[a-zA-Z]-?\s?[a-zA-z]+\s[a-zA-z]+">
					</div>

					<div class="form-group">
						<i class="fal fa-phone" style="color: white"></i>
						<label class="user-signup">Mobile Number:</label>
						<input class="in"  type="text" class="form-control" id="text7" name="Sign_up_Mobile_Number" placeholder="Enter Mobile Number" required pattern="(03[0-4][0-9][-,\s]?[0-9]{7})">
					</div>


					<div class="form-group">
						<input class="in"  type="submit" class="btn-signup btn-primary" value="Click to Submit" name="Sign_up_Button">
					</div>
				</form>
			</font>
		</div>
	</div>
</div>
<div class="navBT">
	<a href="contact.html">ContactUs</a>
	<a href="AboutUs.html">AboutUs</a>
</div>

</body>
</html>