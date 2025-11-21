<?php
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$limit = 5;

// WRONG: no validation
// user can enter huge page number

$page = max(0, intval($page));
if ($page > 1000) {
    die("Page number too large for performance reasons.");
}
$offset = $page * $limit;

$sql = "SELECT * FROM students LIMIT $offset, $limit";
/*
I sanitized the page number using intval() and ensured the minimum is 0.
This prevents MySQL lag or system crash by extremely large offset values.
*/
?>
