<?php
$data = $_POST;

// WRONG: no quotes + incorrect array usage
// VALUES ($data[first_name], $data[last_name], $data[email])

$sql = "INSERT INTO students (first_name, last_name, email)
        VALUES ('{$data['first_name']}', '{$data['last_name']}', '{$data['email']}')";
/*
I added quotes around the array values and correctly used $data['key'] syntax.
*/
?>
