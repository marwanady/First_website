<?php
$db_server = "localhost";
$user_name = "root";
$password = "";
$db = "school";

try {
    $conn = new PDO(
        "mysql:host=$db_server;dbname=$db",
        $user_name,
        $password

    );
    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
    echo "Connected successfully";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>