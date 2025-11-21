<?php
$age = $_POST['age'];

// WRONG: wrong variable name
// $sql = "SELECT * FROM students WHERE age = $aeg";

$sql = "SELECT * FROM students WHERE age = $age";
/*
The variable was misspelled as $aeg.
I corrected it to $age.
*/
?>
