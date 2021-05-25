<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    require('database.php');
    if(!isset($_SESSION['userCart'])){
        $_SESSION['userCart']=array();
    }

    
    $num = sizeof($_SESSION['userCart']);

    $sum = 0;

    $city = $_POST['city'];
    $state = $_POST['state']; //not sure if this works

    echo("<h2>Thank you for shopping with us!</h2>");


    while ($item = current($userCart)) {
        $key = key($userCart);
        $query = "SELECT * FROM book WHERE bookID = $key";
        $books = $db->query($query);
        foreach ($books as $book) {
            $title = $book['bookTitle'];
            $price = $book['bookPrice']*$item;
            $sum = $sum + $price;
        }
        next($userCart);
    }  

    echo("<h2>Order Total: $$sum</h2><br>");

    echo("<p>Your order will arrive in $city, $state in 5 days.</p><br>"); //this needs work

    echo("<p>Items Ordered: </p>");
    echo("<table>");

    $userCart=$_SESSION['userCart'];
    while ($item = current($userCart)) {
        $key = key($userCart);
        $query = "SELECT * FROM book WHERE bookID = $key";
        $books = $db->query($query);
        foreach ($books as $book) {
            $title = $book['bookTitle'];
            $price = $book['bookPrice']*$item;
            echo "<tr>
                        <td id=title><a href=individual.php?bookID=$key>$title</a></td>
                        <td> $item </td>
                        <td><span class=price>$$price</span></td>
                    </tr>";
        }
        next($userCart);
    }
    echo("</table>");
?>