<?php
include('./day11.php');
echo "<br>";

$id = $_GET['id'];


if (isset($_POST['signup'])) {
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $pw = $_POST['password'];
    $gender = $_POST['gender'];
    if (!empty($username) && !empty($email) && !empty($pw)) {
        $query = "UPDATE `users` SET `gender`='$gender' WHERE user_id=$id";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        echo "record update successfully";

    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2> create account</h2>
  <form class="form-horizontal" method = "post"  action="<?php '_PHP_SELF'?>">

  <div class="form-group">
      <label class="control-label col-sm-2" for="user_name">User name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user_name" placeholder="Enter user name" name="user_name">
      </div>
    </div>
 
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
    </div>

    <div class="container mt-3">
  <h3> Gender</>
  
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio1" name="gender" value="female" checked>
      <label class="form-check-label" for="radio1">Female</label>
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio2" name="gender" value="male">
      <label class="form-check-label" for="radio2">Male</label>
    </div>
   
   
</div>


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name = "signup" >Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
