<?php
if (!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['userCart'])){
    $_SESSION['userCart']=array();
}

$userCart=$_SESSION['userCart'];
$num = sizeof($_SESSION['userCart']);


require('database.php');
if (isset($_SESSION['flag']) && !isset($_SESSION['admin'])) { ?>
    <style>
    .acc ul {
        list-style-type: none;
        margin: 0px;
        padding: 0px;
        position: relative;
    }
    .acc ul li a {
        text-decoration: none;
    }
    .acc ul li {
        width: 150px;
        text-align: center;
        background-color: #8D8741;
        float: left;
        padding-top: 10px;
        padding-bottom: 10px;
        border:none;
        font-weight: bold;
        margin:0px;
    }
    .acc ul ul {
        padding: 0px;
        margin: 0px;
        margin-top: 10px;
        display:none;
        position:absolute;
    }
    .acc ul li:hover > ul {
        display:block;
    }

    .acc ul ul li {
        clear: left;
    }
        
    .acc ul.one li:hover {
            background-color: #DAAD86;
            font-weight: bold;
    }
        
    .acc .one .keepColor:hover{
            background-color: #8D8741;
    }
</style>

<header>
    <div class="searchBar">
        <div class = "logo">
            <a href="homepage.php"><img src = "image/camille.png"></a>
        </div>
        <div class = "search">
            <form action = "search_book.php" method = "post">
                <input type="text" name="search" id="search" placeholder="Search...";>
                <button type="submit">Search</button>
            </form>
        </div>
        <nav class = "acc">
            <ul class="one">
                <li class="keepColor"> Welcome, <?php echo $_SESSION['name']?>!
                    <ul class = "two">
    
                        <li><a href = "logout.php"> Log Out </a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class = "cart">
            <a href="checkout.php"><img src="image/cart.png" width="40px"></a>
            <?php echo "<p>$num</p>";?>
        </div>
    </div>
</header>

    <?php } else if (isset($_SESSION['admin']) && isset($_SESSION['flag'])) {?>
    <style>
        .acc ul {
            list-style-type: none;
            margin: 0px;
            padding: 0px;
            position: relative;
        }
        .acc ul li a {
            text-decoration: none;
        }
        .acc ul li {
            width: 150px;
            text-align: center;
            background-color: #8D8741;
            float: left;
            padding-top: 10px;
            padding-bottom: 10px;
            border:none;
            font-weight: bold;
            margin:0px;
        }
        .acc ul ul {
            padding: 0px;
            margin: 0px;
            margin-top: 10px;
            display:none;
            position:absolute;
        }
        .acc ul li:hover > ul {
            display:block;
        }

        .acc ul ul li {
            clear: left;
        }
        
        .acc ul.one li:hover {
            background-color: #DAAD86;
            font-weight: bold;
        }
        
        .acc .one .keepColor:hover{
            background-color: #8D8741;
        }
    </style>

    <header>
        <div class="searchBar">
            <div class = "logo">
                <a href="homepage.php"><img src = "image/camille.png"></a>
            </div>
            <div class = "search">
                <form action = "search_book.php" method = "post">
                    <input type="text" name="search" id="search" placeholder="Search...";>
                    <button type="submit">Search</button>
                </form>
            </div>
            <div class = "acc">
                <ul class="one">
                    <li class="keepColor"> Welcome, <?php echo $_SESSION['name']?>!
                        <ul class = "two">
                            
                            <li><a href = "logout.php"> Log Out </a></li>
                            <li><a href = "admin.php"> ADMIN </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>

<?php }else {?>

<style>
    .acc ul {
        list-style-type: none;
        margin: 0px;
        padding: 0px;
        position:relative;
    }

    .acc ul li a {
        text-decoration: none;
    }

    .acc ul li {
        width: 150px;
        text-align: center;
        background-color: #8D8741;
        float: left;
        padding-top: 10px;
        padding-bottom: 10px;
        border:none;
        font-weight: bold;
        margin:0px;
    }
    .acc ul ul {
        padding: 0px;
        margin: 0px;
        margin-top: 10px;
        display:none;
        position:absolute;
    }
    .acc ul li:hover > ul {
        display:block;
    }

    .acc ul ul li {
        clear: left;
    }
    
    .acc ul li:hover {
        background-color: #DAAD86;
        font-weight: bold;
    }
    
    .keepColor {
        background-color: #8D8741;
    }
    
    .acc .one .keepColor:hover {
            background-color: #8D8741;
    }
</style>

<header>
    <div class="searchBar">
        <div class = "logo">
            <a href="homepage.php"><img src = "image/camille.png"></a>
        </div>
        <div class = "search">
            <form action = "search_book.php" method = "post">
                <input type="text" name="search" id="search" placeholder="Search...";>
                <button type="submit">Search</button>
            </form>
        </div>
        <nav class = "acc">
            <ul class="one">  
                <li class="keepColor"> Account
                    <ul class = "two">
                        <li><a href = "login.php"> Log In </a></li>
                        <li><a href = "account.php"> Create Account </a></li>
                        
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

</header>

<?php }?>