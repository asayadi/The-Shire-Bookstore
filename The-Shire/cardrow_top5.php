<?php
    require('database.php');

    $query = "SELECT * FROM `book`, `book_has_category` WHERE book.bookID = book_has_category.bookID AND categoryID = 1 LIMIT 5";

    $books = $db->query($query);

    echo "<div class = frow id=toprow>";
    echo "  <h2 class = divheader>Top 5 In the U.S</h2>";
    echo "      <div class = fcardrow>";

    foreach ($books as $book) {

        $id = $book['bookID'];
        $title = $book['bookTitle'];
        $img = $book['bookImage'];

        echo " <div class = fcard>
                 <a href=individual.php?bookID=$id>
                 <img src=$img>
                 <p> $title  </p>
                 </a>
               </div>
               ";
    }

    echo "</div>
          </div>";
?>