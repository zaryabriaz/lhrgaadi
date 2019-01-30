
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="index">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Zaryab Riaz">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylesheet.css">

    <title>Lhr Gaddi</title>
</head>

<body id="body-index">
<div class="section">

    <div class="video-container">
        <div class="color-overlay"></div>
        <video autoplay loop muted>
            <source src="video/car.mp4" type="video/mp4">
        </video>
    </div>

</div>
<div class="m">
<div class="container-fluid  change-index font-index">
    <!-- Here top-border starts-->
    <header class="Head">
    <div id="head-index" class="row justify-content-end">
        <div class="col-md-8">
            <a href="Adminlogin.php" class="Button-index Button1-index">Admin Login</a>
        </div>
        <div class="col-md-4">
            <?php
            session_start();
            if(isset($_SESSION['loginusername']))
            {
                echo "Welcome " . $_SESSION['loginusername'];
                echo "<a href=\"UserLogout.php\" class=\"Button-index Button1-index\" >Logout</a>|";
            }?>
            <a href="login.php" class="Button-index Button1-index">signin</a>|<!-- Hammad YOU HAVE TO PUT YOUR link here -->
            <a href="Signup.php" class="Button-index Button1-index">signup</a><!-- zain ali YOU HAVE TO PUT YOUR link here -->
        </div>
    </div>
    <!-- here top-border ends-->
    </header>
    <div  class="  row ">
        <div id="subHead-index" class="col" >
            <img id="logo-index" src="media/logo.png" alt="LHR GAADI"/>
            <h5><i >Car that take you Far.</i></h5>
        </div>
        <div class=" col">

            <h3 id ="Name-index">Lhr Gaddi</h3>
        </div>
        <div class="row ">

            <div class="col " style=" color:#ffff">

                <ul class="main-nav-index font-index">
                    <li><a href="adds.php">Ads</a></li>

                    <li><a href="login.php">SELL</a></li>
                    <li><a href="#">PURCHASE</a></li>
                    <li><a href="#">CAR REVIEWS</a></li>
                    <li><a href="#">PRE-BOOKING</a></li>
                </ul>


            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-4">

        </div>
    </div>
    <div style="margin-top: 70px; ">
    <div  id ="find-index" class="row justify-content-center">
        <div class="col font-index">
            <h1 class="h1-index" >Find Used Cars on <span class="animation" style="color:red">LhrGaadi</span>.<br>
            </h1>
        </div>
    </div>
    <!-- Done with work of header and navigator-->
    <!--<div  id ="search_tag-index" class="row change2-index font-index">-->
        <!--<form class="formData">-->
        <!--<div  class="col-lg-4 user-index ">-->
            <!--<div id="carmodel" >-->
                <!--<label>Car Model:</label>-->

            <!--<input type="text" name="carmodel">-->
        <!--</div>-->
        <!--</div>-->
        <!--<div  class="col-lg-4 user-index ">-->
            <!--<div id="location">-->

                <!--<label>Location:</label>-->

                <!--<input  type="text" name="Areas">-->
        <!--</div>-->
        <!--</div>-->
        <!--<div  class="col-lg-3 user-index">-->
            <!--<div id="range">-->

                <!--<label> price range:</label>-->

                <!--<select  style="color: black">-->
                <!--<option value="800000-100000"> 800000-100000</option>-->
                <!--<option value="800000-100000"> 100000-200000</option>-->
                <!--<option value="800000-100000"> 300000-400000</option>-->
                <!--<option value="800000-100000"> 400000-500000</option>-->
                <!--<option value="800000-100000"> 500000-600000</option>-->
                <!--<option value="800000-100000"> 600000-700000</option>-->
            <!--</select>-->
        <!--</div>-->
        <!--</div>-->
        <!--<div id="bttn-index" class=" col-lg-4 ">-->
            <!--<input style="color:black"; type="submit" value="search"/>-->
        <!--</div>-->
        <!--</form>-->

    <!--</div>-->
    <!-- here search tag ends-->
    <form  style="padding-top: 40px;" id="form"  action="display_car_result.php"  method="post">
        <div  id="innerform">
        <span id="carmodel">
        <label>Car model:</label>
        <input placeholder="eg :Toyota aqua"  required pattern="[a-zA-Z]{4,30}" type="text" name="carmodel"/>
        </span>

            <span id="carrange">
        <label> price range:</label>
         <input placeholder="max range..." type="text" name="range" required pattern="^[1-9][0-9]{5,30}" />
<!--        <select  style="color: black">-->
<!--        <option value="800000-100000"> 800000-100000</option>-->
<!--        <option value="800000-100000"> 100000-200000</option>-->
<!--        <option value="800000-100000"> 300000-400000</option>-->
<!--        <option value="800000-100000"> 400000-500000</option>-->
<!--        <option value="800000-100000"> 500000-600000</option>-->
<!--        <option value="800000-100000"> 600000-700000</option>-->
<!--        </select>-->
            </span>
                    <span id="search">
        <input style="color:black"; name="submit" type="submit" value="search"/>
                    </span>
        </div>
    </form>
    </div>
    <div id="footer-index" style="color:#ffffff;" class="row font-index ">

        <div id="about" class="col-lg-4 "><!-- ADEEL YOU HAVE TO PUT YOUR link here -->
            <a  href="AboutUs.php" class="Button-index Button1-index" >About Us</a><p>Information about us...</p>
        </div>
        <div class="col-lg-4"><!-- Ali YOU HAVE TO PUT YOUR link here -->
            <a href="contact.php" class="Button-index Button2-index" >Contact us</a><p>Give Suggestion to help to improve us... </p>
        </div>
        <div class="col-lg-4">
            <a href="#" class="Button-index Button3-index" >Terms & Conditions</a><p>Rules and policies...</p>
        </div>
    </div>


</div>
</div>
</div>
</body>
</html>