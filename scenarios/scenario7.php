<?php
$conn = mysqli_connect("localhost","root","","class_db");

$id = isset($_POST['id']) ? $_POST['id'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;

// WRONG: missing quotes, no error checking
// $sql = "UPDATE students SET email=$email WHERE id=$id";

if (empty($id) || empty($email)) {
    die("Error: Both id and email must be provided.");
}

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
