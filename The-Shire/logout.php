<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION['userCart']);
    unset($_SESSION['flag']);
    unset($_SESSION['name']);
    unset($_SESSION['admin']);
    header('Location:login.php'); ?>

