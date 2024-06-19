<?php

include('./day11.php');
echo "<br>";

$id = $_GET['id'];
$sql = "DELETE FROM users where user_id='$id'";
$conn->exec($sql);
echo "record deleted";



?>