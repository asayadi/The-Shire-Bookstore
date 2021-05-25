<?php
if (!isset($_SESSION)) {
    session_start();
}
require('database.php');
if(!isset($_SESSION['userCart'])){
    $_SESSION['userCart']=array();
}

$userCart=$_SESSION['userCart'];
$num = sizeof($_SESSION['userCart']);


echo("<h4>Cart 
                <span class=price style=color:black>
                <i class='fa fa-shopping-cart'></i> 
                <b>$num</b>
                </span>
            </h4>");

$sum = 0;

echo "<table>
        <tr>
            <th> Remove </th>
            <th>Book Title </th>
            <th id=quant> Quantity</th>
            <th id=pr> Price</th>
        </tr>
       ";
while ($item = current($userCart)) {
    $key = key($userCart);
    $query = "SELECT * FROM book WHERE bookID = $key";
    $books = $db->query($query);
    foreach ($books as $book) {
        $title = $book['bookTitle'];
        $price = $book['bookPrice']*$item;
        $sum = $sum + $price;
        echo "<tr>
                    <td><form action=remove_from_cart.php method=post> <input type=hidden value=$key name=bookID /><button type=submit> X </button> </form>
                    <td id=title><a href=individual.php?bookID=$key>$title</a></td>
                    <td> $item </td>
                    <td><span class=price>$$price</span></td>

                </tr>";

    }
    next($userCart);
}
echo "</table>";
echo("<hr>
<p>Total <span class=price style=color:black><b>$$sum</b></span></p>");
