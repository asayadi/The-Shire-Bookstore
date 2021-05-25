<?php require('database.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>The Shire</title>
        <link rel = "stylesheet" href = "style.css">
        <script src = "accountErr.js"> </script>
        <script src="copyrightDisplay.js"></script>
    </head>
    <body>
        <div class="page-container">
        <div class="content-wrap">
            <?php include('searchBar.php'); ?>

       <main>
            <div class = "account">
                <h1>Create an Account</h1>
                <form action = "add_account.php" method = "post" id = "createAccount">
                    <label>First Name <span id = "nameErr">*</span></label> <br>
                    <input type="text" placeholder="John" id = "fname" name = "firstName"><br>
                    <label>Last Name</label> <br>
                    <input type="text" placeholder="Smith" id = "lname" name = "lastName"> <br>
                    <label>Email <span id = "emailErr">*</span></label> <br>
                    <input type="email" id = "email" placeholder="JohnSmith@gmail.com" name = "email"> <br>
                    <label>Password <span id = "passErr">*</span></label> <br>
                    <input type="password" id = "pass" placeholder="At least 6 characters" minlength = "6" name = "password"><br>
                    <label>Confirm Password <span id = "passMatchErr">*</span></label><br>
                    <input type="password" id = "confirmpass"> <br>
                    <input type="button" id = "create" value = "Create Account"> <br>
                    <input type = "reset" value = "Start Over" id = "reset">
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