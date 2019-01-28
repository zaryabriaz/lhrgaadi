
<?php
function header_show(){
    echo '<header class="Head">';
    echo   '<ul class ="ul-FP">';
    echo       '<b><li_home_FP><a class="active" href="index.php"><i class="fas fa-home"></i><em> LhrGaddi</em></a></li_home_FP></b>';
    echo      '<li_right_FP><a href="login.php">Login</a></li_right_FP>';
    echo      '<li_right_FP><a href="Signup.php">SignUp</a></li_right_FP>';
    echo  '</ul>';
    echo '</header>';
}