<?php
$d = date('l');

echo "<h2>welcome to $d</h2><br>";

$val = "123";

printf("<p>PAD WITH DOTS%'.10d</p>", $val);


$hour = date('h');

if($hour <20) {echo "have a good day";

} elseif($hour =20) {echo "have a good night";}

else {echo "welcome";}

echo "<br>";

$grade =85;

if($grade >= 50 && $grade <65) {
    echo "pass";
} elseif( $grade >= 65 && $grade <80) {
    echo "Good";
}else {
    echo "very good";
 }

 echo "<br>";
 $favcolour = 'red';

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>switch statement</h2>
  <div class="alert alert-success">
    <strong>Success!</strong> <br>


    <?php 
    switch($favcolour) {
        case 'yello':
            echo " your favorite colour is yellow";
            break;
            case 'red':
                echo "your favorite colour is red";
                break;
                case 'green':
                    echo "your favorite colour is green";
                    break;
                    default:
                    echo "no colour selected ";
     }
    ?>

  </div>
  
</body>
</html>