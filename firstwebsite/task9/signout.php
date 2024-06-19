<?php
 setcookie("username" , $_COOKIE['username'] , time() - (86400 *30) , "/");
 setcookie("Email" , $_COOKIE['Email'] , time() - (86400 *30) , "/");
 setcookie("pw" , $_COOKIE['pw'] , time() - (86400 *30) , "/");
 setcookie("phonenum" , $_COOKIE['phonenum'] , time() - (86400 *30) , "/");

 echo " You 've signed out";

?>