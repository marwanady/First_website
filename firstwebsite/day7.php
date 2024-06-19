<?php

declare (strict_types =1);

function addnumbers (int $a , int $b) {
    return $a + $b;
}
echo addnumbers (5, 10);
echo "<br>";

function greeting ($name = "marwa") {
    switch ($name) {
        case "marwa":
            echo "welcome " . $name; 
            break;
            case "john":
                echo "Hello " . $name; 
                break;
                default:
                echo "greeting";
    }
}

greeting ("ahmed");

echo "<br>";

$names = array('marwa', 'menna','nada', 'ali');


for($i = 0; $i < count($names); $i++) {
    echo $names[$i] . "<br>";
}
echo "<br>";


$grades = array (
    "ENGLISH" => 50,
 "CHEMISTRY" => 100,
  "ARABIC"=> 80,
   "MATH" => 55);

foreach($grades as $key => $val){
    echo $key . " : " . $val . "<br>";
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
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Subject name</th>
        <th>Grade</th>
       
      </tr>
    </thead>
    <tbody>
        <?php

foreach($grades as $key => $val){
    echo "<tr>
    <td> $key </td>
    <td> $val </td>
    </tr>";
}
        ?>
     
    </tbody>
  </table>
</div>

</body>
</html>