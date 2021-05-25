<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>The Shire</title>
    <link rel = "stylesheet" href = "style.css">
    <script src="copyrightDisplay.js"></script>
</head>

<body id = "homepage">
    
    <?php include('searchBar.php'); ?>

    <main>
        <nav id="navBar">
            <ul>
                <li class = "category" id="adult"> Adult
                    <ul>
                        <li>
                            <table>
                                <thead>
                                    <tr>
                                        <th><b>Popular Series</b></th>
                                        <th><b>Popular Authors</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="results.php?search=Song%20of%20ice&got=f">A Game of Thrones</a></td>
                                        <td><a href="results.php?search=grisham&got=f">John Grisham</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=lord%20of%20the%20rings&got=f">The Lord of the Rings</a></td>
                                        <td><a href="results.php?search=martin&got=f">George R. R. Martin</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=outlander&got=f">Outlander</a></td>
                                        <td><a href="results.php?search=dan%20brown&got=f">Dan Brown</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=millennium&got=f">The Girl with the Dragon Tattoo</a></td>
                                        <td><a href="results.php?search=patterson&got=f">James Patterson</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    </ul>
                </li>
                <li class="category" id="teen">Teen/YA
                    <ul>
                        <li>
                            <table>
                                <thead>
                                    <tr>
                                        <th><b>Popular Series</b></th>
                                        <th><b>Popular Authors</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="results.php?search=potter&got=f">Harry Potter</a></td>
                                        <td><a href="results.php?search=clare&got=f">Cassandra Clare</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=games&got=f">Hunger Games</a></td>
                                        <td><a href="results.php?search=john%20green&got=f">John Green</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=meyer&got=f">Twilight</a></td>
                                        <td><a href="results.php?search=black&got=f">Holly Black</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=throne%20of%glass&got=f">Throne of Glass</a></td>
                                        <td><a href="results.php?search=meyer&got=f">Stephenie Meyer</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    </ul>
                </li>
                <li class = "category" id="kids" >Kids
                    <ul>
                        <li>
                            <table>
                                <thead>
                                    <tr>
                                        <th><b>Popular Series</b></th>
                                        <th><b>Popular Authors</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="results.php?search=olympians&got=f">Percy Jackson and the Olympians</a></td>
                                        <td><a href="results.php?search=riordan&got=f">Rick Riordan</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=wimpy&got=f">Diary of a Wimpy Kid</a></td>
                                        <td><a href="results.php?search=dr.&got=f">Dr. Seuss</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=junie&got=f">Junie B. Jones</a></td>
                                        <td><a href="results.php?search=pilkey&got=f">Dav Pilkey</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=diaries&got=f">The Dork Diaries</a></td>
                                        <td><a href="results.php?search=eoin&got=f">Eoin Colfer</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    </ul>
                </li>
                <li class = "category" id="fantasy">Fantasy
                    <ul>
                        <li>
                            <table>
                                <thead>
                                    <tr>
                                        <th><b>Popular Series</b></th>
                                        <th><b>Popular Authors</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="results.php?search=song%20of%20ice&got=f">A Game of Thrones</a></td>
                                        <td><a href="results.php?search=rowling&got=f">J.K. Rowling</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=rings&got=f">The Lord of the Rings</a></td>
                                        <td><a href="results.php?search=pratchett&got=f">Terry Pratchett</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=rowling&got=f">Harry Potter</a></td>
                                        <td><a href="results.php?search=martin&got=f">George R.R. Martin</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=wheel%20of%20time&got=f">The Wheel of Time</a></td>
                                        <td><a href="results.php?search=tolkien&got=f">J.R.R. Tolkien</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    </ul>
                </li>
                <li class ="category" id="classics"> Classics
                    <ul>
                        <li>
                            <table>
                                <thead>
                                    <tr>
                                        <th><b>Popular Books</b></th>
                                        <th><b>Popular Authors</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="results.php?search=tolstoy&got=f">War and Peace</a></td>
                                        <td><a href="results.php?search=shakespeare&got=f">William Shakespeare</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=shelley&got=f">Frankenstein</a></td>
                                        <td><a href="results.php?search=austen&got=f">Jane Austen</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=odyssey&got=f">The Odyssey</a></td>
                                        <td><a href="results.php?search=charlotte&got=f">Charlotte Brönte</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=dick&got=f">Moby Dick</a></td>
                                        <td><a href="results.php?search=twain&got=f">Mark Twain</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    </ul>
                </li>
                <li class= "category" id="nonfiction">Nonfiction
                    <ul>
                        <li>
                            <table id="nonf">
                                <thead>
                                    <tr>
                                        <th><b>Subjects</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="results.php?search=history&got=f">History</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=biography&got=f">Biographical</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=science&got=f">Nature, Science, and Technology</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=religion&got=f">Religion</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=cookbook&got=f">Cookbooks</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="results.php?search=health&got=f">Diet, Health, and Fitness</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <?php include 'cardrow_top5.php';  ?>
        

       <div class = "row">
            <div class = "advert">
            <a href="results.php?search=biography&got=f"><img src= "image/ad2.jpg"></a>
            </div>
        </div>

        <?php include 'cardrow_featured.php';  ?>

        
        <?php include 'cardrow_new.php';  ?>

        <div class = "row">
            <div class = "advert">
            <a href="results.php?search=hunger&got=f"><img src ="image/ad1.png"></a>
            </div>
        </div>

        <?php include 'cardrow_award.php'; ?>
        
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