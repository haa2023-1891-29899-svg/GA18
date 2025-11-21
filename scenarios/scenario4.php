<?php
$conn = mysqli_connect("localhost","root","","class_db");

$first = isset($_POST['fname']) ? $_POST['fname'] : null;
$last = isset($_POST['lname']) ? $_POST['lname'] : null;

// WRONG: no validation
// SQL runs even if fields are empty

if (empty($first) || empty($last)) {
    die("Fields cannot be empty.");
}

$sql = "INSERT INTO students (first_name,last_name) VALUES ('$first', '$last')";
mysqli_query($conn, $sql);

/*
I added validation to prevent inserting blank values.
This avoids SQL errors and ensures only complete records are saved.
*/
echo "Inserted!";
?>
