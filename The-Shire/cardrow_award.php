<?php
    require('database.php');

    $query = "SELECT * FROM `book`, `book_has_category` WHERE book.bookID = book_has_category.bookID AND categoryID = 4 LIMIT 5";

    $books = $db->query($query);

    echo "<div class = frow id = bottomBooks>";
    echo "  <h2 class = divheader>Award Winning reads</h2>";
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