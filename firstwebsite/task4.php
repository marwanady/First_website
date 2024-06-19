<?php
// Q1

$d = date("l");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my website</title>
</head>
<body>
<h1><?php echo "Welcome Eng. Fatma at my website on " . $d;
 ?></h1>
    
</body>
</html>

<?php
// Q2

$x =5;
echo $x;   // prints 5
echo "<br>";
echo $x++ + $x++;     // first $x= 5 then second $x=5+1=6 so 5+6=11 [output]
echo "<br>";
echo $x;              //  $x =5+1+1= 7 so prints 7
echo "<br>";
echo $x-- - $x--;       // first $x= 7 then second $x= 7-1=6 then 7-6=1 prints 1
echo "<br>";
echo $x;             //  7-1=6 ,6-1=5 output = 5



//Q3
$a ='1';
$b = &$a;
$b = "2$b";
echo "<br>";
echo $a;
echo "<br>";
echo $b;

/* $b = &$a  so it will be a referance to $a in $b so $b = '1' , then $b ="2$b" so $b= "21" because the string "2" concannecates withe the value of $b witch is '1'
so $b = "21"  , $a = "21"  because any change in $b will affect $a*/ 



?>