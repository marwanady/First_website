<?php
include('./db_conn.php');
echo "<br>";
$id = $_GET['id'];
if (isset($_POST['signup'])) {
    $username = $_POST['user_name'];
    $contactinfo = $_POST['contact_info'];
    $email = $_POST['email'];
    $pw = $_POST['pw'];
    if (!empty($username) && !empty($contactinfo) && !empty($email) && !empty($pw)) {
        $query = "UPDATE `students` SET `student_name`='$username' ,`contact_info`='$contactinfo', `email`='$email', `password`='$pw' WHERE student_id=$id";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        echo "Record update successfully";

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
  <form class="form-horizontal" method = "post"  action="<?php  '_PHP_SELF'?>">

  <div class="form-group">
      <label class="control-label col-sm-2" for="user_name">User name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user_name" placeholder="Enter user name" name="user_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="contact_info"> Contact info:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="contact_info" placeholder="Enter contact info" name="contact_info">
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
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pw">
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
