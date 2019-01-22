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
        <li_right_FP><a href="AdminPanel.php">AdminPanel</a></li_right_FP>
        <li_right_FP><a href="login.php">Login</a></li_right_FP>
        <li_right_FP><a href="Signup.php">SignUp</a></li_right_FP>
    </ul>
</header>

<div class="login_Container">
    <div >
        <h1 style="margin-top: 5%">View</h1>
    </div>
    <form action="Admin_view.php" method="POST">
    <div>
        <input  type="submit" class="login_Button Adminlogin_Button" value="View" name="VIEWDATA_Button">
    </div>
    <br>
        <table border="1" align="center">
            <tr style="color:red">
                <td width="100px"><h4>Id</h4></td>
                <td width="100px"><h4>Name</h4></td>
                <td width="100px"><h4>Username</h4></td>
                <td width="100px"><h4>Email</h4></td>
                <td width="100px"><h4>Password</h4></td>
                <td width="100px"><h4>Confirm_password</h4></td>
                <td width="100px"><h4>Address</h4></td>
                <td width="100px"><h4>Mobile_numner</h4></td>
            </tr>
        <?php
        if(isset($_POST['VIEWDATA_Button']))
        {
            require "connection/db_connection.php";
            $select="Select * from `sign_up`";
            $query=mysqli_query($con,$select);
            while($row=mysqli_fetch_array($query))
            {
                $id=$row['id'];
                $name=$row['Name'];
                $username=$row['Username'];
                $email=$row['Email'];
                $password=$row['Password'];
                $confirmpassword=$row['ConfirmPassword'];
                $address=$row['Address'];
                $mobilenumber=$row['Mobile_Number'];
                echo '<tr>'
                    .'<td>'.$id.'</td>'
                    .'<td>'.$name.'</td>'
                    .'<td>'.$username.'</td>'
                    .'<td>'.$email.'</td>'
                    .'<td>'.$password.'</td>'
                    .'<td>'.$confirmpassword.'</td>'
                    .'<td>'.$address.'</td>'
                    .'<td>'.$mobilenumber .'</td>'
                    .'</tr>';
            }
        }?>
        </table>
    </form>

</div>
<footer class="navBT">
    <a href="contact.html">ContactUs</a>
    <a href="AboutUs.html">AboutUs</a>
</footer>
</body>
</html>