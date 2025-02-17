<?php include_once "db.php";

$row=$News->find($_POST['id']);

$row['main_id']=($row['main_id']+1)%2;

$News->save($row);