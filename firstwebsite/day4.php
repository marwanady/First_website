<?php
 $x = 23465.768;
 $y = (int)$x;
 echo $y;

 $number = "234.65";
 $result = $number + 10;
 echo $result;

 define('link', 'www.google.com');
 echo "<br> welcome to our website :" . link . "<br>";

 $num1 = 25;
 $num2 = 10;


 $mu1 = $num1 * $num2;
 $division = $num1 / $num2;
 $result = $num1 % $num2;

 echo "$num1*$num2=" . $mu1 . "<br>";
 echo "25/10 =" . $division . "<br>";
 echo "25 %10 =" . $result . "<br>";

 // comparison operators 
 $x = 10;
 $y = 20;
 var_dump($x == $y);             // value only
 echo "<br>";
 var_dump($x === $y);            // value, data type
 echo "<br>";

 // increment operations

 $sum = $x++ + $y;

 echo $sum;
 echo "<br>";

 echo $x;
 echo "<br>";


 echo $x++;       //post
 echo "<br>";

 echo ++$x;         //pre
 echo "<br>";


//decrement 

echo $x--;        //POST
echo "<br>";
echo --$x;         //PRE

echo "<br>";


$a ='1';
$b = &$a;
echo $b;
$b = "2$b";
echo "<br>";

echo $b;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATE & TIME</title>
</head>
<body>

<P> 
    <?php

    $NEW_DATE = mktime(10,20, 15, 3, 5,1970);
    echo "your date is:" . date("Y- m- d h: i: sa", $NEW_DATE);
    ?></p>
    <h3>
        <?php
        $d = date("Y-m-d h:i:sa");
        echo "today date is :" . $d; ?> </h3>
    
</body>
</html>