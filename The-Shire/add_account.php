<?php
    require('database.php');
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO user(firstName, lastName, email, password) VALUE 
('$firstName', '$lastName','$email', '$password')";
    $add_user = $db-> exec($query);

    include('login.php');
?>
