<?php
include('./day11.php');

$sql= "SELECT users.user_name,users.email,users.gender,orders.order_id,orders.order_date
FROM users LEFT JOIN orders
ON users.user_id=orders.user_id
ORDER BY users.user_name";

$stmt = $conn->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll();


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
        <th>Order_id</th>
        <th>Order_date</th>
        
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
            <td>{$row['order_id']}</td>
            <td>{$row['order_date']}</td>
           
            </tr>";
          }
        
        ?>
      
    </tbody>
  </table>
</div>

</body>
</html>