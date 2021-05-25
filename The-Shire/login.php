<?php
if (!isset($_SESSION)) {
    session_start();
}
require('database.php');
if (isset($_SESSION['flag'])) {
    header('Location:account.php');
} else {
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>The Shire</title>
        <link rel = "stylesheet" href = "style.css">
        <script src="copyrightDisplay.js"></script>
    </head>
    
    <body>
        <?php include('searchBar.php'); ?>
       <main>
           <div class = "login">
               <h1>Log In</h1>

                <?php if($_SESSION['error'] != '') { ?>
                    <p style = color:red;><?php echo $_SESSION['error']?> </p>
                <?php }?>

               <form action = "session.php" method = "post">
                    <label>Email <span id = "emailError">*</span></label> <br>
                    <input type="text" id="loginEmail" name="email"> <br>
                    <label>Password<span id = "passError">*</span></label> <br>
                    <input type="password" id = "loginPassword" name ="password"><br><br>
                    <input type = "submit" id = "login" value = "Log In">
               </form>
               <a href="account.php"><h3>Not a user yet? Create an account.</h3></a>
               <br>
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

<?php } ?>