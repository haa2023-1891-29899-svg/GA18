<?php
$conn = mysqli_connect("localhost","root","","class_db");

// WRONG: misspelled POST key
// $email = $_POST['emial'];

$email = $_POST['email'];
/*
The input name is "email". The old code used "emial" which causes undefined index errors.
*/
$sql = "SELECT * FROM students WHERE email='$email'";
$res = mysqli_query($conn, $sql);
?>
