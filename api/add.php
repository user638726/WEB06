<?php
include_once "db.php"; // Assuming this includes a database connection

    $News->save(['title'=>$_POST['title'],'news'=>$_POST['news']]);

to("../admin.php?do=news");
?>