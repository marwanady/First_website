<?php
session_start();
unset( $_SESSION['user']);
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['phonenum']);

session_destroy();

echo "You 've signed out";

?>