<?php 
$age = 24;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Age</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Your age</h2>
  <div class="alert alert-success">
    <strong>Success!</strong> <br>
    <?php
    if($age <=30) {
      echo "you are less than or equal 30";
    }else {
      echo "you are greater than 30";
    }
    
    ?>


  </div>

</div>

</body>
</html>