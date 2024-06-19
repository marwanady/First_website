<?php 
//session_start();

//unset($_SESSION['username']);
//unset($_SESSION['email']); 
//unset($_SESSION['pw']);

//session_destroy();
//echo "You are loged out";

$expired_date = time() - (86400 *30);
setcookie("user_data" , $_COOKIE['user_data'] , $expired_date , "/");
echo "You are loged out";



?>