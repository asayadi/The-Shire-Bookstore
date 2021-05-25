<?php
if (!isset($_SESSION)) {
    session_start();
}
$bookID = $_POST['id'];
$quantity = $_POST['quantity'];


if(!isset($_SESSION['userCart'])){
    $_SESSION['userCart']=array();
}


// check if book is already in cart
if(!isset($_SESSION['userCart'][$bookID])) {
    $_SESSION['userCart'][$bookID] = $quantity;
} else {
    $quan = $_SESSION['userCart'][$bookID];
    $quan = $quan + $quantity;
    $_SESSION['userCart'][$bookID] = $quan;
}

header('Location:individual.php?bookID='.$bookID);
