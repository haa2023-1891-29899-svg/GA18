<?php
$conn = mysqli_connect("localhost", "root", "", "class_db");

// WRONG: using $_POST instead of $_GET
// $id = $_POST['id'];

$id = $_GET['id']; 
/*
I replaced $_POST with $_GET because the value is coming from the URL (?id=3).
Using POST causes undefined index or empty value since no form is submitting POST data.
*/

$sql = "SELECT * FROM students WHERE student_id = $id";
$res = mysqli_query($conn, $sql);
$r = mysqli_fetch_assoc($res);

echo $r['first_name'];
?>
