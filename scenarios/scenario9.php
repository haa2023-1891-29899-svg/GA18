<?php
// WRONG: expects POST but link sends GET
// $id = $_POST['id'];

if (!isset($_GET['id']) || $_GET['id'] === "" || !is_numeric($_GET['id'])) {
    die("Error: No valid id supplied in the URL.");
}
$id = $_GET['id'];
/*
I changed POST to GET because the link (anchor tag) sends the value via URL, not via form.
*/
?>

<a href="view.php?id=3">View Student</a>
