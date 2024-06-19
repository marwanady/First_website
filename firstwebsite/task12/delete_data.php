<?php

include('./db_conn.php');
echo "<br>";

$id = $_GET['id'];
$sql = "DELETE FROM students where student_id='$id'";
$conn->exec($sql);
echo "Record deleted";
?>