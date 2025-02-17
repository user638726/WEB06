<?php include_once "db.php";

$row=$News->find($_POST['id']);

$row['id']=($row['id']+1)%2;

$News->save($row);