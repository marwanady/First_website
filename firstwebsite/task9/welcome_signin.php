<?php
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

            setcookie("username" , $_POST['user_name'] , time() + (86400 *30) , "/");
            setcookie("Email" , $_POST['email'] , time() + (86400 *30) , "/");
            setcookie("pw" , $_POST['password'] , time() + (86400 *30) , "/");
            setcookie("phonenum" , $_POST['num'] , time() + (86400 *30) , "/");




              $msg = "Hi " . $_COOKIE['username'] . " , Your account created successfully ";
              echo "<h1><ins> $msg </ins></h1>" . "<br><mark><a href = './signout.php'> Sign out</a></mark>";


        } else {echo "Enter a valid password";  }
    }else {echo "Enter your information ";}

}


?>

