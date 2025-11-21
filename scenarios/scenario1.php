<?php
$conn = mysqli_connect("localhost", "root", "", "class_db");

// WRONG: using $_POST instead of $_GET
// $id = $_POST['id'];

// FIX: Add safety check + use GET
if (!isset($_GET['id']) || $_GET['id'] === "") {
    die("Error: No ID provided. Use scenario1.php?id=1");
}

$id = intval($_GET['id']);  // correct

/*
I replaced $_POST with $_GET because the value comes from the URL.
I added a safety check so the file still runs even if no ID is provided.
intval() prevents SQL injection and invalid values.
*/

$sql = "SELECT * FROM students WHERE student_id = $id";
$res = mysqli_query($conn, $sql);

if (!$res) {
    die("SQL Error: " . mysqli_error($conn));
}

$r = mysqli_fetch_assoc($res);

if (!$r) {
    die("No student found with that ID.");
}

echo $r['first_name'];
?>

