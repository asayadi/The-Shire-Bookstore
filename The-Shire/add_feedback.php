<?php
require('database.php');
$name = $_POST['fname'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO feedback
            (name, email, message) VALUES
            ('$name', '$email', '$message')";

$add = $db->exec($query);

header('Location:contactUs.html');

?>