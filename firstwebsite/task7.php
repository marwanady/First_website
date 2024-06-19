<?php

$student_food = array("Joe" => "Smarties", "Ahmed" => "Pringles", "Cassie" => "Marmite crisps", "Ben" => "Mr Kiplings cakes");



function number ($num=25){
  if (is_numeric($num)) {
    if ($num > 0) {
    echo "The $num is a positive number";
}elseif ($num < 0) {
    echo " The $num is a negative number";
}else {
    echo "The $num equals zero";
}
    
} else{
    echo "The $num isn't a numeric value";
}
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
foreach($student_food as $key => $val) {
    echo "<p> $key likes $val </p>";
}


?>

<div class="container">
  <h2>Students & Food</h2>
            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Student name</th>
        <th>Favorite food</th>
        
      </tr>
    </thead>
    <tbody>
     <?php
     foreach($student_food as $key => $val) {
        echo "<tr>
        <td>$key</td>
        <td>$val</td>
        </tr>";
    }
     ?>
    </tbody>
  </table>
</div>

<p>
  <mark>
  <?php
  number(-88);
  ?>
  </mark>
  </p>


</body>
</html>