<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    $bookID = $_POST['bookID'];
    unset($_SESSION['userCart'][$bookID]);

    header('Location:checkout.php');

?>
