<?php
    $search = $_POST['hiddenS'];
    $link = "Location:results.php?got=t&search=$search";
    if(isset($_POST['title'])) {
        $title = $_POST['title'];
        $link .= "&title=$title&ti=t";
        if(isset($_POST['author'])) {
            $author = $_POST['author'];
            $link .= "&author=$author&au=t";
            if(isset($_POST['price'])) {
                $price = $_POST['price'];
                $link .= "&price=$price&pr=t";
                if(isset($_POST['rating'])) {
                    $rating = $_POST['rating'];
                    $link .= "&rating=$rating&ra=t";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
                else {
                    $link .= "&ra=f";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
            }
            else {
                $link .= "&pr=f";
                if(isset($_POST['rating'])) {
                    $rating = $_POST['rating'];
                    $link .= "&rating=$rating&ra=t";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
                else {
                    $link .= "&ra=f";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
            }
        }
        else {
            $link .= "&au=f";
            if(isset($_POST['price'])) {
                $price = $_POST['price'];
                $link .= "&price=$price&pr=t";
                if(isset($_POST['rating'])) {
                    $rating = $_POST['rating'];
                    $link .= "&rating=$rating&ra=t";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
                else {
                    $link .= "&ra=f";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
            }
            else {
                $link .= "&pr=f";
                if(isset($_POST['rating'])) {
                    $rating = $_POST['rating'];
                    $link .= "&rating=$rating&ra=t";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
                else {
                    $link .= "&ra=f";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
            }
        }
    }
    else {
        $link .= "&ti=f";
        if(isset($_POST['author'])) {
            $author = $_POST['author'];
            $link .= "&author=$author&au=t";
            if(isset($_POST['price'])) {
                $price = $_POST['price'];
                $link .= "&price=$price&pr=t";
                if(isset($_POST['rating'])) {
                    $rating = $_POST['rating'];
                    $link .= "&rating=$rating&ra=t";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
                else {
                    $link .= "&ra=f";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
            }
            else {
                $link .= "&pr=f";
                if(isset($_POST['rating'])) {
                    $rating = $_POST['rating'];
                    $link .= "&rating=$rating&ra=t";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
                else {
                    $link .= "&ra=f";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
            }
        }
        else {
            $link .= "&au=f";
            if(isset($_POST['price'])) {
                $price = $_POST['price'];
                $link .= "&price=$price&pr=t";
                if(isset($_POST['rating'])) {
                    $rating = $_POST['rating'];
                    $link .= "&rating=$rating&ra=t";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
                else {
                    $link .= "&ra=f";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
            }
            else {
                $link .= "&pr=f";
                if(isset($_POST['rating'])) {
                    $rating = $_POST['rating'];
                    $link .= "&rating=$rating&ra=t";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
                else {
                    $link .= "&ra=f";
                    if(isset($_POST['age'])) {
                        $age = $_POST['age'];
                        $link .= "&age=$age&ag=t";
                        header($link);
                    }
                    else {
                        $link .= "&ag=f";
                        header($link);
                    }
                }
            }
        }
    }
?>