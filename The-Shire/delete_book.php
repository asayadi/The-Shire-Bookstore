<?php

require('database.php');
$bookID = $_POST['bookID'];

$query = "DELETE FROM book WHERE bookID = $bookID";
$add = $db->exec($query);


header('Location:homepage.php');



