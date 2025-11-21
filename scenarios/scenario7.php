<?php
$conn = mysqli_connect("localhost","root","","class_db");

$id = $_POST['id'];
$email = $_POST['email'];

// WRONG: missing quotes, no error checking
// $sql = "UPDATE students SET email=$email WHERE id=$id";

$sql = "UPDATE students SET email='$email' WHERE student_id=$id";
$res = mysqli_query($conn, $sql);

if (!$res) {
    die("Query failed: " . mysqli_error($conn));
}

/*
I added quotes around $email and added error checking.
This prevents the script from lying by printing "Updated!" even on failure.
*/
echo "Updated!";
?>
