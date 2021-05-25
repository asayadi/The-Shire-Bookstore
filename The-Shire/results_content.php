<?php
    require('database.php');

    $search = $_GET["search"];
    $get = $_GET["got"];

    #rating_table looks for the amount of times a book shows up when all tags of the search query are searched seperately
    $query = "SELECT * FROM book b WHERE b.bookTitle LIKE '%$search%' OR b.bookAuthor LIKE '%$search%' OR b.bookID IN (SELECT bc.bookID FROM book_has_category bc WHERE bc.categoryID = (SELECT c.categoryID FROM category c WHERE c.categoryName LIKE '%$search%'))";
    
    if($get == 't') {
      $ti = $_GET["ti"];
      $au = $_GET["au"];
      $pr = $_GET["pr"];
      $ra = $_GET["ra"];
      $ag = $_GET["ag"];
      if($ti == 't') {
        $title = $_GET['title'];
        if($title == 'ta-z') {
          $query .= " ORDER BY bookTitle";
        }
        else {
          $query .= " ORDER BY bookTitle DESC";
        }
        if($au == 't') {
          $author = $_GET['author'];
          if($author == 'aa-z') {
            $query .= ", bookAuthor ASC";
          }
          else {
            $query .= ", bookAuthor DESC";
          }
          if($pr == 't') {
            $price = $_GET['price'];
            if($price == 'pl-h') {
              $query .= ", bookPrice ASC";
            }
            else {
              $query .= ", bookPrice DESC";
            }
            if($ra == 't') {
              $rating = $_GET['rating'];
              if($rating == 'rl-h') {
                $query .= ", bookRating ASC";
              }
              else {
                $query .= ", bookRating DESC";
              }
              if($ag == 't') {
                $age = $_GET['age'];
                if ($age == 'es') {
                  $query .= ", CASE age WHEN 'Elementary School' THEN 1 WHEN 'Middle School' THEN 2 WHEN 'Teen' THEN 3 WHEN 'Adult' THEN 4 ELSE 5 END";
                }
                else if ($age == 'ms') {
                  $query .= ", CASE age WHEN 'Middle School' THEN 1 WHEN 'Teen' THEN 2 WHEN 'Adult' THEN 3 WHEN 'Elementary School' THEN 4 ELSE 5 END";
                }
                else if ($age == 'te') {
                  $query .= ", CASE age WHEN 'Teen' THEN 1 WHEN 'Middle School' THEN 2 WHEN 'Adult' THEN 3 WHEN 'Elementary School' THEN 4 ELSE 5 END";
                }
                else {
                  $query .= ", CASE age WHEN 'Adult' THEN 1 WHEN 'Teen' THEN 2 WHEN 'Middle School' THEN 3 WHEN 'Elementary School' THEN 4 ELSE 5 END";
                }
              }
            }
          }
        }
      }
      else {
        if($au == 't') {
          $author = $_GET['author'];
          if($author == 'aa-z') {
            $query .= " ORDER BY bookAuthor ASC";
          }
          else {
            $query .= " ORDER BY bookAuthor DESC";
          }
          if($pr == 't') {
            $price = $_GET['price'];
            if($price == 'pl-h') {
              $query .= ", bookPrice ASC";
            }
            else {
              $query .= ", bookPrice DESC";
            }
            if($ra == 't') {
              $rating = $_GET['rating'];
              if($rating == 'rl-h') {
                $query .= ", bookRating ASC";
              }
              else {
                $query .= ", bookRating DESC";
              }
              if($ag == 't') {
                $age = $_GET['age'];
                if ($age == 'es') {
                  $query .= ", CASE age WHEN 'Elementary School' THEN 1 WHEN 'Middle School' THEN 2 WHEN 'Teen' THEN 3 WHEN 'Adult' THEN 4 ELSE 5 END";
                }
                else if ($age == 'ms') {
                  $query .= ", CASE age WHEN 'Middle School' THEN 1 WHEN 'Teen' THEN 2 WHEN 'Adult' THEN 3 WHEN 'Elementary School' THEN 4 ELSE 5 END";
                }
                else if ($age == 'te') {
                  $query .= ", CASE age WHEN 'Teen' THEN 1 WHEN 'Middle School' THEN 2 WHEN 'Adult' THEN 3 WHEN 'Elementary School' THEN 4 ELSE 5 END";
                }
                else {
                  $query .= ", CASE age WHEN 'Adult' THEN 1 WHEN 'Teen' THEN 2 WHEN 'Middle School' THEN 3 WHEN 'Elementary School' THEN 4 ELSE 5 END";
                }
              }
            }
          }
        }
        else {
          if($pr == 't') {
            $price = $_GET['price'];
            if($price == 'pl-h') {
              $query .= " ORDER BY bookPrice ASC";
            }
            else {
              $query .= " ORDER BY bookPrice DESC";
            }
            if($ra == 't') {
              $rating = $_GET['rating'];
              if($rating == 'rl-h') {
                $query .= ", bookRating ASC";
              }
              else {
                $query .= ", bookRating DESC";
              }
              if($ag == 't') {
                $age = $_GET['age'];
                if ($age == 'es') {
                  $query .= ", CASE age WHEN 'Elementary School' THEN 1 WHEN 'Middle School' THEN 2 WHEN 'Teen' THEN 3 WHEN 'Adult' THEN 4 ELSE 5 END";
                }
                else if ($age == 'ms') {
                  $query .= ", CASE age WHEN 'Middle School' THEN 1 WHEN 'Teen' THEN 2 WHEN 'Adult' THEN 3 WHEN 'Elementary School' THEN 4 ELSE 5 END";
                }
                else if ($age == 'te') {
                  $query .= ", CASE age WHEN 'Teen' THEN 1 WHEN 'Middle School' THEN 2 WHEN 'Adult' THEN 3 WHEN 'Elementary School' THEN 4 ELSE 5 END";
                }
                else {
                  $query .= ", CASE age WHEN 'Adult' THEN 1 WHEN 'Teen' THEN 2 WHEN 'Middle School' THEN 3 WHEN 'Elementary School' THEN 4 ELSE 5 END";
                }
              }
            }
          }
          else {
            if($ra == 't') {
              $rating = $_GET['rating'];
              if($rating == 'rl-h') {
                $query .= " ORDER BY bookRating ASC";
              }
              else {
                $query .= " ORDER BY bookRating DESC";
              }
              if($ag == 't') {
                $age = $_GET['age'];
                if ($age == 'es') {
                  $query .= ", CASE age WHEN 'Elementary School' THEN 1 WHEN 'Middle School' THEN 2 WHEN 'Teen' THEN 3 WHEN 'Adult' THEN 4 ELSE 5 END";
                }
                else if ($age == 'ms') {
                  $query .= ", CASE age WHEN 'Middle School' THEN 1 WHEN 'Teen' THEN 2 WHEN 'Adult' THEN 3 WHEN 'Elementary School' THEN 4 ELSE 5 END";
                }
                else if ($age == 'te') {
                  $query .= ", CASE age WHEN 'Teen' THEN 1 WHEN 'Middle School' THEN 2 WHEN 'Adult' THEN 3 WHEN 'Elementary School' THEN 4 ELSE 5 END";
                }
                else {
                  $query .= ", CASE age WHEN 'Adult' THEN 1 WHEN 'Teen' THEN 2 WHEN 'Middle School' THEN 3 WHEN 'Elementary School' THEN 4 ELSE 5 END";
                }
              }
            }
            else {
              if($ag == 't') {
                $age = $_GET['age'];
                if ($age == 'es') {
                  $query .= " ORDER BY CASE age WHEN 'Elementary School' THEN 1 WHEN 'Middle School' THEN 2 WHEN 'Teen' THEN 3 WHEN 'Adult' THEN 4 ELSE 5 END";
                }
                else if ($age == 'ms') {
                  $query .= " ORDER BY CASE age WHEN 'Middle School' THEN 1 WHEN 'Teen' THEN 2 WHEN 'Adult' THEN 3 WHEN 'Elementary School' THEN 4 ELSE 5 END";
                }
                else if ($age == 'te') {
                  $query .= " ORDER BY CASE age WHEN 'Teen' THEN 1 WHEN 'Middle School' THEN 2 WHEN 'Adult' THEN 3 WHEN 'Elementary School' THEN 4 ELSE 5 END";
                }
                else {
                  $query .= " ORDER BY CASE age WHEN 'Adult' THEN 1 WHEN 'Teen' THEN 2 WHEN 'Middle School' THEN 3 WHEN 'Elementary School' THEN 4 ELSE 5 END";
                }
              }
            }
          }
        }
      }
    }

    $books = $db->query($query);

    foreach ($books as $book) {

        $id = $book['bookID'];
        $title = $book['bookTitle'];
        $author = $book['bookAuthor'];
        $img = $book['bookImage'];
        $price = $book['bookPrice'];

        echo " <div class=results-card>
                <a href=individual.php?bookID=$id>
                  <img src=$img>
                  <h3> $title </h3>
                  <h3> by $author </h3>
                  <p> $$price </p>
                </a>
              </div>
               ";
    }
    


?>