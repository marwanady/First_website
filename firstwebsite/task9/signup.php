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


  <h2>  Register here</h2>
  <form class="form-horizontal" method = "post"  action ="./welcome_signin.php">

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
    <div class="form-group">
      <label class="control-label col-sm-2" for="psw"> Confirm Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="psw" placeholder="confirm password" name="psw">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="num">Phone number</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="num" placeholder="Enter phone number" name="num">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="age">Age:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="age" placeholder="Enter your age" name="age">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember">I agree to your Terms & Privacy  </label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name = "signup">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
