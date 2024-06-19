<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $user = $_REQUEST['user_name'];
    $email = $_REQUEST['email'];
    $PW = $_REQUEST['password'];
    if (empty($user) or empty($email) or empty($PW)) {
        echo "<h3>Please insert your data</h3>";
    }else{
        echo "<h2> Welcome $user </h2><br>";
        echo "<p> your email is : $email ";
    }

}
?>