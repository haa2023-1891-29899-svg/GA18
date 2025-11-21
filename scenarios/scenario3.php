<?php
$conn = mysqli_connect("localhost","root","","class_db");

// WRONG: vulnerable to SQL injection
// $age = $_GET['age'];
// $sql = "SELECT * FROM students WHERE age = $age";

if (!isset($_GET['age']) || $_GET['age'] === "" || !is_numeric($_GET['age'])) {
    die("Error: No valid age parameter given in URL.");
}
$age = intval($_GET['age']);
$stmt = $conn->prepare("SELECT * FROM students WHERE age = ?");
$stmt->bind_param("i", $age);
$stmt->execute();
/*
I replaced the raw SQL with a prepared statement.
This prevents SQL injection like entering "1 OR 1=1" in the URL.
*/
?>
