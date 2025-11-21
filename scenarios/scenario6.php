<?php
$conn = mysqli_connect("localhost","root","","class_db");

// WRONG: unsafe direct GET → vulnerable
// $sql = "DELETE FROM students WHERE id = " . $_GET['id'];

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Error: No valid id provided.");
}
$id = intval($_GET['id']);
$sql = "DELETE FROM students WHERE student_id = $id";
mysqli_query($conn, $sql);

/*
I used intval() to sanitize the value.
This prevents attacks like ?id=0 OR 1=1 which would delete everything.
*/
?>

