<?php
$conn = mysqli_connect("localhost","root","","class_db");

$fname = $_POST['fname'];

// WRONG: missing quotes around string
// $sql = "SELECT * FROM students WHERE first_name = $fname";

$sql = "SELECT * FROM students WHERE first_name = '$fname'";
/*
I added quotes around $fname because SQL string values must be inside quotes.
Without them, SQL thinks the value is a column name.
*/
$res = mysqli_query($conn, $sql);
?>
