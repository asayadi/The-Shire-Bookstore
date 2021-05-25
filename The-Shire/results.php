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
        <div class="container">
            <div class="filters">
                <form id="filtered" action="post_filterForm.php" method="post">
                    <h3>Filter:</h3>
                    <p id="by book">By Book Title:</p>
                    <input type="radio" name="title" id="ta-z" value="ta-z">
                    <label for="a-z">A-Z</label>
                    <br>
                    <input type="radio" name="title" id="tz-a" value="tz-a">
                    <label for="z-a">Z-A</label>
                    <br>
                    <p id="byAuthor"> By Author Name:</p>
                    <input type="radio" name="author" id="aa-z" value="aa-z">
                    <label for="aa-z">A-Z</label>
                    <br>
                    <input type="radio" name="author" id="az-a" value="aa-z">
                    <label for="az-a">Z-A</label>
                    <br>
                    <p class="filt" id="byPrice">By Price:</p>
                    <input type="radio" name="price" id="l-h" value="pl-h">
                    <label for="l-h">Low-High</label>
                    <br>
                    <input type="radio" name="price" id="h-l" value="ph-l">
                    <label for="h-l">High-Low</label>
                    <br>
                    <p class="filt" id="byRating">By Rating:</p>
                    <input type="radio" name="rating" id="rl-h" value="rl-h">
                    <label for="rl-h">Low-High</label>
                    <br>
                    <input type="radio" name="rating" id="rh-l" value="rh-l">
                    <label for="rh-l">High-Low</label>
                    <br>
                    <p class="filt" id="byAge">By Age:</p>
                    <input type="radio" name="age" id="es" value="es">
                    <label for="es">Elementary School</label>
                    <br>
                    <input type="radio" name="age" id="ms" value="ms">
                    <label for="ms">Middle School</label>
                    <br>
                    <input type="radio" name="age" id="te" value="te">
                    <label for="t">Teen/YA</label>
                    <br>
                    <input type="radio" name="age" id="ad" value="ad">
                    <label for="a">Adult</label>
                    <br>
                    <?php include 'hidden_search.php'; ?>
                    <input type="submit" id="submit" value="Apply Filters">
                </form>
            </div>
            
            <div class="results">
                <?php include 'results_content.php';  ?>
            </div>

        </div>

        <footer>
            <ul id="footBar">
                <div id="copyrightDiv" onmouseover="show()" onmouseout="hide()"><li>Copyright<div id="copyright">&copy;2021 The Shire, Inc. All rights reserved.</div></li></div>
                <li><a href="termsAndConditions.html">Terms and Conditions</a></li>
                <li><a href="contactUs.html">Contact Us!</a></li>
            </ul>
        </footer>
    </body>
</html>