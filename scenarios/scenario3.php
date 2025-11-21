<?php
$conn = mysqli_connect("localhost","root","","class_db");

// WRONG: vulnerable to SQL injection
// $age = $_GET['age'];
// $sql = "SELECT * FROM students WHERE age = $age";

$age = $_GET['age'];
$stmt = $conn->prepare("SELECT * FROM students WHERE age = ?");
$stmt->bind_param("i", $age);
$stmt->execute();
/*
I replaced the raw SQL with a prepared statement.
This prevents SQL injection like entering "1 OR 1=1" in the URL.
*/
?>
