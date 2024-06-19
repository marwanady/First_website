<?php
session_start();
$msg = "";


if (isset($_POST['signup'])) {
    $user = $_POST['user_name'];
    $email = $_POST['email'];
    $PW = $_POST['password'];
    $psw = $_POST['psw'];
    $phonenum = $_POST['num'];
    $age = $_POST['age'];
    if (!empty($user) && !empty($email) && !empty($PW) && !empty($psw) && !empty($phonenum) && !empty($age)){
        if ($PW == $psw){
            $_SESSION['user'] = $user;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $PW;
            $_SESSION['phonenum'] = $phonenum;
          
            $msg = "Hi " . $_SESSION['user'] . " , Your account created successfully ";
            echo "<h1><ins> $msg </ins></h1>" . "<br>" .  "<mark><a href = './register_signout.php'> Sign out</a></mark>";



        } else {echo "Enter a valid password";}

    }else {echo "Enter your information";}

};




?>

