<?php

require('database.php');
$title = $_POST['title'];
$author = $_POST['author'];
$listPrice = $_POST['price'];
$quantity = $_POST['quantity'];
$rating = $_POST['rating'];
$img = $_POST['img'];
$desc = $_POST['desc'];

$query = "INSERT INTO book
    (bookTitle, bookAuthor, bookPrice,bookQuantity, bookRating, bookImage, bookDescription) VALUES
    ('$title', '$author', $listPrice, $quantity, $rating, '$img', '$desc')";

$add = $db->exec($query);
include('admin.php');
