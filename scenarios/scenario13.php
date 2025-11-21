<?php
$conn = mysqli_connect("localhost","root","","class_db");
$newEmail = isset($_POST['email']) ? $_POST['email'] : null;

// WRONG: NO WHERE CLAUSE!
// $sql = "UPDATE students SET email='$newEmail'";

if (empty($newEmail)) {
    die("Email must be provided.");
}
$sql = "UPDATE students SET email='$newEmail' WHERE student_id=1";
/*
I added a WHERE clause to avoid updating ALL rows.
In real use, the student_id should also come from POST/GET.
*/
mysqli_query($conn,$sql);
?>
