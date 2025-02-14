<?php
include_once "db.php"; // Assuming this includes a database connection

// Ensure POST data is sanitized for security
$title = htmlspecialchars($_POST['title']);
$news = htmlspecialchars($_POST['text']);

// Saving data to the 'news' table
$News->save([
    'title' => $title,
    'news' => $news
]);

// Redirecting to the admin page
to("../admin.php?do=news");
?>