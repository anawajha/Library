<?php
include_once 'database/db_connection.php';

if (isset($_GET['cat_id'])) {
$cat_id = $_GET['cat_id'];
$get_category = "SELECT * FROM categories WHERE id = $cat_id LIMIT 1";
$result = mysqli_query($connection, $get_category);
if (mysqli_num_rows($result) > 0){
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <!-- Boostrap Library -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link type="text/css" href="css/main-style.css" rel="stylesheet"/>
    <script type="text/javascript" src="js/loginmodal.js"></script>
</head>

<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5 logo">
                <a href="index.php"> <img src="img/logo.jpg" alt="logo books">
                    <h1>Books</h1></a>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-3 col-md-offset-2 col-lg-offset-4">
                <div id="search-input" style="width: fit-content;border: none;padding-top: 15px;">
                    <div>
                        <a href="search.php"><i class="glyphicon glyphicon-search"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-default">
    <div class="container-fluid menuNav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false"><span
                            class="sr-only">Navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a href="index.php">Home</a></li>
                    <li><a href="profile_user.php">Profile</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>


                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-7 paddingNone userDropdownMenu">
                            <div class="btn-group iconMenu" role="group" aria-label="...">
                                <!-- // buttons -->
                                <div class="btn-group" role="group">
                                    <a href="admin/login.php">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="modal"
                                                aria-haspopup="true" aria-expanded="false"><img
                                                    src="img/user_undefined_f_40x40.jpg" class="img-circle"/>
                                            <span>Sign in</span> <span class="fa fa-power-off"></span></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="container content">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                <li class="active"> <?php echo $row['CategoryName']; ?> </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 nombreautor titulo">
            <h2> <?php echo $row['CategoryName']; ?> </h2></div>
    </div>
    <div class="row infoautor">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="col-lg-9 desc">
                <p>
                    1706 / 5000
                    Translation results
                    A fan of science fiction, popular culture and progressive music, he has worked since 1999 as a non-fiction
                    editor, content consultant and contributor for magazines such as Rolling Stone and VIVE; As a screenwriter,
                    he has written for various production companies and TV stations (¿Se rents?, Santos, Adiós al 7º de Línea, Mala Onda,
                    among other programs and films). In addition, he is co-creator of the Ucronía Chile site and the podcast From the End of
                    the World, both together with his friend, Jorge Baradit, who is also a writer..</p>

                <p>He made his debut in the novel with 60 kilometers (1995), which was followed in 2006 by The Kaifman Number (reissued in 2015,
                    as a corrected and expanded version under the title The Kaifman Verb): «... in the line of Dan Brown, Ken Follett, Stephen
                    King or Tom Clancy. A cocktail that includes the Vatican, the Order of the Templars, terrorist attacks in Santiago de Chile,
                    Nazis lost in Antarctica and hidden cities, ”according to a review.</p>

                <p>This book, entrusted to Ortega by Gabriel Sandoval -editor of the Planeta label- while Brown triumphed with a novel full of
                    conspiracies, 2 is the first volume of the Césares Trilogy, which is followed by Logia (2014, illustrated by Marcelo Pérez Dalannays)
                    , a novel that began in 2008 and that after being published reached the rank of best seller, appearing among the best-selling books in
                    Chile for more than 25 weeks.3 It was also published in Mexico4 and in 2015 a CORFO financing fund was awarded to adapt it to television
                    5. He closes this Andinia saga, the Antarctic Cathedral (launched at the end of July 2016), the year in which he also intends to publish
                    the sequel of 1899, a graphic novel where he shares authorship with the cartoonist Nelson Dániel.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <h2> <?php echo $row['CategoryName'] . " books"; ?></h2>
    </div>

    <div>
        <div>
            <div>
                <div>
                    <div>
                        <div>
                            <div>
                                <div>
                                    <div>

                                            <?php
                                            $c_id = $row['id'] ;
                                            $get_books =  "SELECT books.title, books.id AS book_id, books.cover, books.ISBNNumber, categories.id AS cat_id,
                        categories.CategoryName, authors.id AS author_id, authors.authorName, publishing_houses.id AS ph_id, publishing_houses.house_name 
                        FROM books JOIN categories ON categories.id=books.catId JOIN authors ON authors.id=books.authorId JOIN publishing_houses ON publishing_houses.id=books.phId 
                        WHERE categories.id = $c_id";
                                            $result3 = mysqli_query($connection,$get_books);
                                            if(mysqli_num_rows($result3) > 0){
                                                while($row2 = mysqli_fetch_assoc($result3)){

                                                    echo ' <div>
                <div class="row item">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="coverItem"><img src=" '.'http://localhost/finalProject/' . $row2['cover'].'"
                                                    class="img-responsive"/>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-7 informationItem">
                        <h3 class="title">'. $row2['title'] .'</h3>
                        <h5 class="authorName">by <a href="author.php?author_id=' .$row2['author_id'] . '"> ' . $row2['authorName'] . '</a></h5>
                        <span class="ratingValue"> ISBN Number : '. $row2['ISBNNumber'] .'</span>
                        <h5 class="authorName">from <a href="publish_house.php?ph_id=' .$row2['ph_id'] . '"> ' . $row2['house_name'] . '</a></h5>
                        <h5 class="authorName">from <a href="category.php?cat_id=' .$row2['cat_id'] . '"> ' . $row2['CategoryName'] . '</a></h5>

                        </div>
                    </div>
                </div>
                <hr> </div> ';
                                                }
                                            }
                                            ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <?php } else echo '<div class="row">  <div class="col-lg-12">  <div class="alert alert-danger"> No Data Found </div>  </div>   </div>';
    } ?>

    <!-- Comments -->
<div class="comments" style="width: 70%; margin:30px auto">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <hr>
                <h3>Comments</h3>
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#"> <img class="media-object" src="img/user_undefined_f_40x40.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body"><span class="media-heading"
                                                  style="font-weight: bold">Middle aligned media</span>
                        <p>Lorem ipsum pain sit amet, consectetur adipisicing elit. Dolorem quis quam quasi harum saepe
                            consequuntur ea quod odit veniam sunt. She fugiat voluptate aspernatur, voluptates corrupti
                            consequatur rem inventore quibusdam iure.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#"> <img class="media-object" src="img/user_undefined_m_40x40.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body"><span class="media-heading"
                                                  style="font-weight: bold">Middle aligned media</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quis quam quasi harum saepe
                            consequuntur ea quod odit veniam sunt. Fugiat voluptate aspernatur, voluptates corrupti
                            consequatur rem inventore quibusdam iure.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
</div>
<footer class="container-fluid">
    <div class="container">
        <div class="row copyright">
            <div class="col-lg-12"><span>Copyright © 2021 Books | All rights reserved.</span></div>
        </div>
    </div>
</footer>
</body>
