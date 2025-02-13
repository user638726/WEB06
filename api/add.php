<?php
include_once "db.php"; // Assuming this includes a database connection

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize inputs to avoid SQL injection
    $title = htmlspecialchars($_POST['title']);
    $text = htmlspecialchars($_POST['text']);

    // Assuming $News is an object of a class that handles saving to the database
    $news->News->save($_POST);
     // Make sure `save` method accepts both title and text as parameters

    // Redirect to admin page after saving
    header('Location: ../admin.php');
    exit();
}
?>