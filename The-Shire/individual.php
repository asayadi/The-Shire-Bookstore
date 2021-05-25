<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>The Shire</title>
        <link rel = "stylesheet" href = "style.css">
        <script src="copyrightDisplay.js"></script> 
    </head>

    <body>
    <?php include('searchBar.php'); ?>
            
       <?php include 'individual_display.php';  ?>

        <footer>
            <ul id="footBar">
                <div id="copyrightDiv" onmouseover="show()" onmouseout="hide()"><li>Copyright<div id="copyright">&copy;2021 The Shire, Inc. All rights reserved.</div></li></div>
                <li><a href="termsAndConditions.html">Terms and Conditions</a></li>
                <li><a href="contactUs.html">Contact Us!</a></li>
            </ul>
        </footer>
    </body>
</html>