<?php 
include('./day11.php');
echo "<br>";

$stmt = $conn->prepare('SELECT * from users');
$stmt->execute();
$data = $stmt->fetchAll();

//foreach ($data as $row) {
  //  echo $row['user_name'] . " ". $row['email'] . " " . $row['gender'] . "<br>";
//}


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
  <h2> All users</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>User name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $row) {
            echo "
            <tr>
            <td>{$row['user_name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['gender']}</td>
            <td><a href='./update_data.php?id={$row['user_id']}'>update</a></td>
            <td><a href='./delete.php?id={$row['user_id']}'>delete</a></td>

            </tr>";
          }
        
        ?>
      
    </tbody>
  </table>
</div>

</body>
</html>