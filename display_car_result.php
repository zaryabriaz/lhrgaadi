<?php
/**
 * Created by PhpStorm.
 * User: zaryab
 * Date: 1/28/2019
 * Time: 6:26 PM
 */
require_once ('connection/db_connection.php');
if(isset($_POST['submit'])) {
    $car_model = $_POST['carmodel'];
    $price = $_POST['range'];
   /* echo $price;*/
    $query = "select * from adds where Price<='$price' and '$car_model'=Model ";

    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result)>0) {

        while ($rows = mysqli_fetch_assoc($result)) {
            $aid = $rows['Aid'];
            $model = $rows['Model'];
            $make = $rows['Make'];
            $price = $rows['Price'];
            $details = $rows['Details'];
            $img = $rows['Images'];

            echo "
                <div id='showpost'>
                    <img src='Admin/addimages/$img' alt='car picture'>
                    <br>
                    <h1><label>Model:</label></h1>
                    <h2>$model</h2>
                    AdID:<h2>$aid</h2>
                    Make:<h2>$make</h2>
                    Price:<h2>$price</h2>
                    Details:<h2>$details</h2>
                </div>
                ";                                  }
    }
    else {
        echo "No car found of this Model";
         }
}