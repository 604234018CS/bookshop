<?php
require 'db.php';
$id = $_GET['list_id'];
$sql = 'DELETE FROM book WHERE bookID=' $_GET['id'];
$statement = $connection->prepare($sql);
  header("Location: booklist.php");
?>