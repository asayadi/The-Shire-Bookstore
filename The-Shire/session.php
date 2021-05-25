<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    require('database.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
    $data = $db->query($query);
    $firstName = $data -> fetch();

    $_SESSION['error'] = '';
    if ($data->rowCount() == 0) {
        $_SESSION['error'] = 'Please Enter a Valid Email and Password';
    }
    if ($_SESSION['error'] != '') {
        include('login.php');
        exit();
    }

    if ($data->rowCount() > 0) {
        //valid login
        $_SESSION['flag'] = TRUE;
        $_SESSION['name'] = $firstName['firstName'];
        if ($_SESSION['name'] == "admin") {
            $_SESSION['admin'] = TRUE;
        }
        header('Location:homepage.php');
    } else {
       include('login.php');
   }
