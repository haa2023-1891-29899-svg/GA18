<?php
$conn = mysqli_connect("localhost","root","","class_db");

// WRONG: misspelled POST key
// $email = $_POST['emial'];

if (!isset($_POST['email']) || $_POST['email'] === "") {
    die("Error: No email provided in POST.");
}
$email = $_POST['email'];
/*
The input name is "email". The old code used "emial" which causes undefined index errors.
*/
$sql = "SELECT * FROM students WHERE email='$email'";
$res = mysqli_query($conn, $sql);
?>
