<?php
include('./db_conn.php');

$sql = "SELECT students.student_name,students.contact_info,students.email,subjects.subject_name,tests.assessment_type,tests.max_score,tests.test_date
FROM tests RIGHT JOIN student_test
on tests.test_id=student_test.test_id
RIGHT JOIN students
ON student_test.student_id=students.student_id
RIGHT JOIN student_subject
ON students.student_id=student_subject.student_id
RIGHT JOIN subjects
ON student_subject.subject_id=subjects.subject_id";


$stmt = $conn->prepare($sql);
$stmt->execute();

$data = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Students & Tests</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Students & Tests </h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Student name</th>
        <th>Contact info</th>
        <th>Email</th>
        <th>Subject name</th>
        <th>Assessment type</th>
        <th>Max score</th>
        <th>Test_date</th>
     
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
            <td>{$row['subject_name']}</td>
            <td>{$row['assessment_type']}</td>
            <td>{$row['max_score']}</td>
            <td>{$row['test_date']}</td>
           
           
           
            </tr>";
          }
        
        ?>
      
    </tbody>
  </table>
</div>

</body>
</html>




