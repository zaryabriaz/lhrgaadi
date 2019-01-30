<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        ADMIN VIEW
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
        <h1 style="margin-top: 5%">View</h1>
    </div>
    <form action="Admin_products_view.php" method="POST">
        <div>
            <input  type="submit" class="login_Button Adminlogin_Button" value="View" name="VIEWDATA_Button">
        </div>
        <br>
        <table border="1" align="center">
            <tr style="color:red">
                <td width="100px"><h4>AId</h4></td>
                <td width="100px"><h4>Model</h4></td>
                <td width="100px"><h4>Make</h4></td>
                <td width="100px"><h4>Price</h4></td>
                <td width="100px"><h4>Username</h4></td>
                <td width="100px"><h4>Name</h4></td>
                <td width="100px"><h4>Email</h4></td>
                <td width="100px"><h4>PhoneNumber</h4></td>
                <td width="100px"><h4>Details</h4></td>
            </tr>
            <?php
            session_start();
            if(isset($_SESSION['adminloginusername']))
            {
                if(isset($_POST['VIEWDATA_Button']))
                {
                    require "connection/db_connection.php";
                    $select="Select * from `adds`";
                    $query=mysqli_query($con,$select);
                    while($row=mysqli_fetch_array($query))
                    {
                        $Car_Aid=$row['Aid'];
                        $Car_Model=$row['Model'];
                        $Car_Make=$row['Make'];
                        $Car_Price=$row['Price'];
                        $Car_Username=$row['Username'];
                        $Car_Name=$row['Name'];
                        $Car_Email=$row['Email'];
                        $Car_PhoneNumber=$row['PhoneNumber'];
                        $Car_Details=$row['Details'];
                        echo '<tr>'
                            .'<td>'.$Car_Aid.'</td>'
                            .'<td>'.$Car_Model.'</td>'
                            .'<td>'.$Car_Make.'</td>'
                            .'<td>'.$Car_Price.'</td>'
                            .'<td>'.$Car_Username.'</td>'
                            .'<td>'.$Car_Name.'</td>'
                            .'<td>'.$Car_Email.'</td>'
                            .'<td>'.$Car_PhoneNumber.'</td>'
                            .'<td>'.$Car_Details.'</td>'
                            .'</tr>';
                    }
                }
            }
            else
            {
                echo '<script language="javascript">';
                echo 'alert("Login admin first.")';
                echo '</script>';
            }
            ?>
        </table>
    </form>

</div>
<footer class="navBT">
    <a href="contact.html">ContactUs</a>
    <a href="AboutUs.html">AboutUs</a>
</footer>
</body>
</html>