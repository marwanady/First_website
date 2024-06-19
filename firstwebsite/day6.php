<?php

$num = 0;
while($num >=10) {
    echo "The number is " . $num . "<br>";
    $num++;
}

dO 
{echo "The result is " . $num . "<br>";
    $num++ ;
}while ($num <10);





    function greeting($name) {
        echo "Hello $name";
    }

    function test(){
        $colors = array('red', 'yellow', 'green', 'blue');

foreach ($colors as $value) {
    echo $value . "<br>";
}



    }

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
    <h1> 
        <?php 
        greeting("Marwa")
        ?>
    </h1>
  <h2>loops</h2>
  <?php
  for($x =1; $x < 10; $x++){
      echo " <div class='alert alert-success'>
    <strong>Success!</strong> <br>
    the result is: $x
  </div>";
  if ($x == 5) {
  //  break;
   continue;

 }

  }
  ?>

  <P style= "background-color: yellow;">
    <?php
    test()
    ?>
  </p>
  </div>
  

</body>
</html>