<?php 
include('./db_conn.php');
echo "<br>";

$stmt = $conn->prepare('SELECT * from students');
$stmt->execute();
$data = $stmt->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2> All students</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Student name</th>
        <th>Contact info</th>
        <th>Email</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $row) {
            echo "
            <tr>
            <td>{$row['student_name']}</td>
            <td>{$row['contact_info']}</td>
            <td>{$row['email']}</td>
            <td><a href='./update_students.php?id={$row['student_id']}'>update</a></td>
            <td><a href='./delete_data.php?id={$row['student_id']}'>Delete</a></td>

            
            </tr>";
          }
        
        ?>
      
    </tbody>
  </table>
</div>

</body>
</html>