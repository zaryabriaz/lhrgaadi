<?php
/**
 * Created by PhpStorm.
 * User: zaryab
 * Date: 1/21/2019
 * Time: 4:33 PM
 */
require ("connection/db_connection.php");
$query="select * from adds";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==0)
{
    echo" no ad on your Account";
}
else {
    while ($rows = mysqli_fetch_assoc($result)) {
       $aid=$rows['Aid'];
        $model= $rows['Model'];
        $make=$rows['Make'];
        $price=$rows['Price'];
        $details=$rows['Details'];
        echo "
                
                    
                    
                    <label>Model:</label>
                    <h2>$model</h2>
                    AdID:<h2>$aid</h2>
                    Make:<h2>$make</h2>
                    Price:<h2>$price</h2>
                    Details:<h2>$details</h2>
                
        ";
    }
}

