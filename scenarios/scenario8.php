<?php
$conn = mysqli_connect("localhost","root","","class_db");

$res = mysqli_query($conn,"SELECT * FROM students");

// WRONG: fetch only one row
// $row = mysqli_fetch_assoc($res);
// echo $row['email'];

if (!$res) {
    die("SQL Error: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($res)) {
    echo $row['email'] . "<br>";
}

/*
I added a while loop because mysqli_fetch_assoc returns one row at a time.
A loop is required to print all records.
*/
?>

