<?php

    require 'connection/db_connection.php';
    $ID = $_REQUEST['e'];

    $select = "Select * from sign_up where id = '$ID'";
    $query=mysqli_query($con,$select);
    
    if($query)
    {
        $row=mysqli_fetch_array($query);

        echo "
            <div>
                <h2 style='color: white;'>
                    <input class ='login_form-control-my' type='text' id='Uname' name='Car_Model' value = '$row[Name]' placeholder='Model' required pattern='[a-zA-Z][a-zA-Z][a-zA-Zs]+$'> &nbsp
                    <i class='far fa-car' style='color: skyblue'></i>
                </h2>
            </div>" ;
    }
    else
    {
      echo "ERROR";  
    }

    
?>