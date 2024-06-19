<?php




echo "Hello " .  $_COOKIE['username'];


$name ='marwa';

echo "welcome $name";
echo "<br>";
$num1 =10;
$num2 =20;
$result =$num1 + $num2;
echo $result . "<br>";

echo "<h2> php is fun !</h2>";
echo "hello world !<br>";
echo " i'm about to learn php ! <br>";
echo "this", "string", "was", "made", "with multible parameters.";
echo "<br>";

// define variable here
$var1 ="hello world!";

echo strlen($var1);
echo "<br>";
echo str_word_count($var1);
echo "<br>";
echo strrev($var1);
echo "<br>";
echo str_replace('world', 'marwa', $var1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>welcome to first php code</h1>
<p>hjjkkuh</p>
<b>hello</b>
<em><b>
    <?php echo $name ?></B></em>
    <br>
    <p>your result is:
        <?php echo $result; ?>
</p>

    
</body>
</html>






