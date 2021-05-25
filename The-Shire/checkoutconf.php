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
            
        <main id = "confheader">
            <h1>Order Confirmation</h1>
            <div class = "checkoutconf">
                
                
                <?php include('show_checkoutConf_info.php');?>
                <!--<h2>Thank you for shopping with us!</h2>
                <h2> Order Total: $46.95 </h2>
                <h3> Your order will arrive in City, State in 5 days.</h3>
                <h3 style = "text-align:left; margin-left: 2em;"> Items Ordered: </h3> -->
                
                
                
                <a href = "homepage.php">
                    <button href = "homepage.php" type="button">Back to home </button>
                </a>
                </br>
            </div>
        </main>

        <footer>
            <ul id="footBar">
                <div id="copyrightDiv" onmouseover="show()" onmouseout="hide()"><li>Copyright<div id="copyright">&copy;2021 The Shire, Inc. All rights reserved.</div></li></div>
                <li><a href="termsAndConditions.html">Terms and Conditions</a></li>
                <li><a href="contactUs.html">Contact Us!</a></li>
            </ul>
        </footer>
    </body>
</html>