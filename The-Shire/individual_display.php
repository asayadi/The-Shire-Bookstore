<?php
    require('database.php');

if (isset($_SESSION['admin'])) {

    $bookID = $_GET["bookID"];
    $query = "SELECT * FROM `book` WHERE bookID = $bookID LIMIT 1";

    $books = $db->query($query);
    foreach ($books as $book) {

        $id = $book['bookID'];
        $title = $book['bookTitle'];
        $author = $book['bookAuthor'];
        $img = $book['bookImage'];
        $price = $book['bookPrice'];
        $description = $book['bookDescription'];
        $rating = $book['bookRating'];

        $query = "SELECT * FROM `book_has_category`, `category` WHERE book_has_category.categoryID = category.categoryID AND bookID = $bookID";
        $tags = $db->query($query);
        echo "  <div class=individualCard>
                    <div class=bookimage>
                        <img src=$img/>
                    </div>
                    <div class = item-body>
                        <div class=individual-center-col>
                        <form action = addToCart.php method = post>
                            <h1> $title </h1>
                            <hr>
                            <h2> $author </h2>
                            <p> Rating: $rating/5 </p>
                            <div class = tags>
                                <p> Tags: 
                ";
        foreach ($tags as $tag) {
            $category = $tag['categoryName'];
            echo "$category, ";
        }
        echo "         
                                </p>
                            </div>
                            <h2> $$price </h2>
                            <p> In Stock </p>
                            <p class = description> $description</p>                     
                            </form>
                            <form action = delete_book.php method = post> 
                            <input type=submit value = 'Delete Book' id= delete>
                            <input type = hidden value = $id name = bookID>
                            </form>   
                        </div>                   
                       
                    </div>
                </div>
            ";
    }


} else {
    $bookID = $_GET["bookID"];

    $query = "SELECT * FROM `book` WHERE bookID = $bookID LIMIT 1";

    $books = $db->query($query);
    foreach ($books as $book) {

        $id = $book['bookID'];
        $title = $book['bookTitle'];
        $author = $book['bookAuthor'];
        $img = $book['bookImage'];
        $price = $book['bookPrice'];
        $description = $book['bookDescription'];
        $rating = $book['bookRating'];

        $query = "SELECT * FROM `book_has_category`, `category` WHERE book_has_category.categoryID = category.categoryID AND bookID = $bookID";
        $tags = $db->query($query);
        echo "  <div class=individualCard>
                    <div class=bookimage>
                        <img src=$img/>
                    </div>
                    <div class = item-body>
                        <div class=individual-center-col>
                            <h1> $title </h1>
                            <hr>
                            <h2> $author </h2>
                            <p> Rating: $rating/5 </p>
                            <div class = tags>
                                <p> Tags: 
                ";
        foreach ($tags as $tag) {
            $category = $tag['categoryName'];
            echo "$category, ";
        }
        echo "         
                                </p>
                            </div>
                            <h2> $$price </h2>
                            <p> In Stock </p>
                            <p class = description> $description</p>
                            <form action = addToCart.php method = post> 
                                <label id = quantity> Quantity: </label>
                                <input type=number id = numBooks name=quantity  max=5 min=1 value = 1>
                                <input type=hidden value=$bookID name = id> <br><br>
                                <button type=submit id= addtocart> Add to Cart </button>                                             
                            </form>   
                        </div>
                    </div>
            ";
    }
}

