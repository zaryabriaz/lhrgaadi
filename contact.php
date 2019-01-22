<!DOCTYPE html>
<?php
require_once ('connection/db_connection.php');
?>
<html>
<head>
	<title>
		Contact Us
	</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
				<link rel="stylesheet" type="text/css" href="css/stylesheet.css">


	<meta charset="utf-8">
	<meta name="description" content="Contactus">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="author" content="Ali Shahroz">
	<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <?php
    if(isset($_POST['contactus_button']))
    {
    $NAME=$_POST['Name'];
    $EMAIL=$_POST['Email'];
    $PHONE=$_POST['Phone'];
    $MESSAGE=$_POST['Message'];


    $insert="insert into contactus_by_email(`Name`,`Email`,`Phone`,`Message`) values ('$NAME','$EMAIL','$PHONE','$MESSAGE')";
    $query=mysqli_query($con,$insert);

    if(!mysqli_query($con,$insert))
    {
    echo 'Data not inserted';
    }
    else{
        echo"<script>";
        echo 'alert("Thanks for contacting us we will reply you soon!!!")';
        echo"</script>";
    }

    }
    else{
        header("location:contact.php");
    }
    ?>
</head>
<body div="body-contact">
<header class="Head">
	<ul class ="ul-FP">
		<b><li_home_FP><a class="active" href="index.php"><i class="fas fa-home"></i><em> LhrGaddi</em></a></li_home_FP></b>
		<li_right_FP><a href="login.php">Login</a></li_right_FP>
		<li_right_FP><a href="Signup.php">SignUp</a></li_right_FP>
	</ul>
</header>

<div class ="contactformback2_ContactUs">
	


	<form action="contact.php" method="post" class="contactformfront_ContactUs">
	<span class="contacttitle_ContactUs">
	  <b>Contact Us</b>
	  <br>
									</span>
						 <div class ="contactinput_ContactUs" >

	<span class="ContactLabel_ContactUs"> Name <br> </span>
	<input class="ContactInputLabel_ContactUs" type="	text" name="Name"  placeholder="Enter Full Name" required pattern="[a-zA-Z][a-zA-Z][a-zA-Z\s]+$">  <br>
</div>
	 						 <div class ="contactinput_ContactUs" >

	<span class="ContactLabel_ContactUs"> Email <br></span>
	<input class="ContactInputLabel_ContactUs" type="text" name="Email"  placeholder="Enter Email" required pattern="(^\S+@\S+[\.][0-9a-z]+$)"> <br>
</div>
						 <div class ="contactinput_ContactUs" >

	<span class="ContactLabel_ContactUs"> Phone <br></span>
	<input class="ContactInputLabel_ContactUs" type="text" name="Phone"  placeholder="Enter Phone Number" required pattern="(03[0-4][0-9][-,\s]?[0-9]{7})"> <br>
</div>
		<div class ="contactinput1_ContactUs" >

	<span class="ContactLabel_ContactUs"> Message <br></span>
						<textarea class="contactinputlabel1_ContactUs" name="Message" placeholder="Questions/Comments..."></textarea>

<!-- 	<input class="ContactInputLabel1" type="text" name="Message" placeholder="Questions/Comments"> 
 -->	
</div>

<div class="contactbtnbg_ContactUs">
						<div class="contactformbtn1_ContactUs"></div>
						<input type="submit" name="contactus_button" value="Send" class="contactformbtn2_ContactUs">

					</div>
</form>

</div>
		</div>
<div class="mapouter_ContactUs">
	<div class="gmap_canvas_ContactUs">
		<iframe width="1598" height="900"  id="gmap_canvas_ContactUs" src="https://maps.google.com/maps?q=ucp&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" left="5%">

		</iframe>
		<a href="https://www.crocothemes.net"></a>
	</div>
</div>
<div class="contactnumber_ContactUs">
					
		<img  align="middle" > <b>   (+92) 0303-1234567 <br> </b>
		</div>
		<div class="contactemail_ContactUs">  <br>
				<img  align="middle"> <b>&nbsp;&nbsp;info@gaddi.com.pk

</b>

</div>
</div>
		</div>
<div class="navBT">
	<a href="contact.html">ContactUs</a>
	<a href="AboutUs.html">AboutUs</a>
</div>
</body>
</html>




