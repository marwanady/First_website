<?php

$sum = 0;

for($x =1; $x <30; $x++) {
    $sum +=$x;
}

function area ($lenth , $width) {
    echo $lenth * $width;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum & Area</title>
</head>
<body>
    <h2>The total result is:
        <?php   
        echo $sum;
        ?> </h2>
<p>The area of rectaangle equals
  <mark>
      <?php
    area (5, 10);
    ?>
    </mark>
     </p>

    
</body>
</html>