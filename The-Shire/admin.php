<?php require('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<style>
    label {
        display:inline-block;
        text-align: right;
        width:150px;
        font-weight: bold;
        margin-top: 10px;
    }
    input {
        padding-bottom: 2px;
        margin-right: 50px;
    }

</style>
<head>
    <meta charset="UTF-8">
    <title>The Shire</title>
    <link rel = "stylesheet" href = "style.css">
    <script src="copyrightDisplay.js"></script> 
</head>
<body>
<div class="page-container">
    <div class="content-wrap">
        <?php include('searchBar.php'); ?>
        <main>
            <div class = "add_book">
                <h1> Add A Book </h1>
                <form action = "add_book.php" method = "post">
                    <label> Title: </label>
                    <input type = "text" name = "title"> <br>
                    <label> Author: </label>
                    <input type = "text" name = "author"> <br>
                    <label> List Price: </label>
                    <input type = "text" name = "price"> <br>
                    <label> Quantity: </label>
                    <input type = "text" name = "quantity"> <br>
                    <label> Rating: </label>
                    <input type = "text" name = "rating"> <br>
                    <label> Image link: </label>
                    <input type = "text" name = "img"> <br>
                    <label id="descrip"> Description: </label>
                    <textarea name="desc" id="descT"></textarea> <br>
                    <input type = "submit" id = "submit" value = "Add Book">
                </form>
            </div>
        </main>
    </div>

    <footer>
        <ul id="footBar">
        <div id="copyrightDiv" onmouseover="show()" onmouseout="hide()"><li>Copyright<div id="copyright">&copy;2021 The Shire, Inc. All rights reserved.</div></li></div>
            <li><a href="termsAndConditions.html">Terms and Conditions</a></li>
            <li><a href="contactUs.html">Contact Us!</a></li>
        </ul>
    </footer>
</div>

</body>
</html>