<?php
$conn = mysqli_connect("localhost","root","","class_db");


// WRONG: missing safety check
// $fname = $_POST['fname'];

// FIX: Check if POST exists to avoid undefined array key
if (!isset($_POST['fname']) || $_POST['fname'] === "") {
    die("Error: Please submit a POST value named 'fname'.");
}

$fname = $_POST['fname']; 

// WRONG: missing quotes around string
// $sql = "SELECT * FROM students WHERE first_name = $fname";

// FIXED:
$sql = "SELECT * FROM students WHERE first_name = '$fname'";

/*
I added quotes around $fname because SQL string comparisons require quotes.
I added a safety check so the script doesn’t produce undefined index warnings.
*/

$res = mysqli_query($conn, $sql);

if (!$res) {
    die("SQL Error: " . mysqli_error($conn));
}

if (mysqli_num_rows($res) === 0) {
    die("No students found with that name.");
}

while ($row = mysqli_fetch_assoc($res)) {
    echo $row['first_name'] . "<br>";
}
?>
