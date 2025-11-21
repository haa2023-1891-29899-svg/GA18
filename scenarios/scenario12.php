<?php
$id = $_GET['id'];

// WRONG: ID enclosed in quotes but it's an integer
// $sql = "SELECT * FROM students WHERE id = '$id'";

$id = intval($id);
$sql = "SELECT * FROM students WHERE student_id = $id";
/*
Removed quotes and casted to int since IDs are numeric.
This avoids inefficient or incorrect index usage.
*/
?>
