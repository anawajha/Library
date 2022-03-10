<?php
include_once 'database/db_connection.php';
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
    <link rel="stylesheet" href="css/main-style.css"/>
</head>

<body>

<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-lg-5 logo">
                <a href="index.php"> <img src="img/logo.jpg" alt="logo books">
                    <h1>Books</h1></a>
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
    <!-- Content -->
    <div class="row contentMain">
        <div class="col-lg-12">
            <div class="col-lg-2">
                <div class="brands_products">
                    <!--brands_products-->
                    <h3 class="title">Categories</h3>
                    <div class="well">
                        <ul class="nav nav-pills nav-stacked">
                            <?php

                            $query = "SELECT COUNT(b.catId) as booksNum, b.catId, c.CategoryName FROM books as b,categories as c WHERE b.catId = b.catId AND b.catId = c.id GROUP BY c.CategoryName";
                            $result = mysqli_query($connection, $query);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '<li>
                                <a href="category.php?cat_id=' . $row['catId'] . '"> <span class="pull-right">(' . $row['booksNum'] . ')</span>' . $row['CategoryName'] . '</a>
                            </li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <!--/brands_products-->
                <div class="price-range">
                    <h3 class="title">Year of publication</h3>
                    <div class="well">
                        <div class="text-center">
                            <input type="text" class="span2" value="" data-slider-min="1990" data-slider-max="2021" data-slider-step="1" data-slider-value="[1990,2010]" id="sl2" style="width: 100%">
                            <br /> </div> <b>1990</b> <b class="pull-right">2021</b> </div>
                </div>
            </div>

            <div class="col-lg-9">

                <h3 class="title">Results</h3>
                <div>
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

                                                        $conn = new mysqli('localhost', 'root', '', 'library');
                                                        if(isset($_GET['search'])){
                                                            $search = $_GET['search'];
                                                            $search_query = "SELECT books.title, books.id AS book_id, books.cover, books.ISBNNumber, categories.id AS cat_id,
                                                            categories.CategoryName, authors.id AS author_id, authors.authorName, publishing_houses.id AS ph_id, publishing_houses.house_name 
                                                            FROM books JOIN categories ON categories.id=books.catId JOIN authors ON authors.id=books.authorId JOIN publishing_houses ON publishing_houses.id=books.phId 
                                                            WHERE books.title LIKE '%$search%' OR authors.authorName LIKE '%$search%' OR categories.CategoryName LIKE '%$search%' OR publishing_houses.house_name LIKE '%$search%'";
                                                        } else
                                                            $search_query = "SELECT books.title, books.id AS book_id, books.cover, books.ISBNNumber, categories.id AS cat_id,
                                                            categories.CategoryName, authors.id AS author_id, authors.authorName, publishing_houses.id AS ph_id, publishing_houses.house_name 
                                                            FROM books JOIN categories ON categories.id=books.catId JOIN authors ON authors.id=books.authorId JOIN publishing_houses ON publishing_houses.id=books.phId";
                                                        $result = mysqli_query($conn, $search_query);
                                                        ?>
                                                        <form action="" method="GET">
                                                            <div class="col-md-6">
                                                                <input type="text" name="search" class='form-control' placeholder="Search By Name" value=<?php echo @$_GET['search']; ?> >
                                                            </div>
                                                            <div class="col-md-6 text-left">
                                                                <button class="btn">Search</button>
                                                            </div>
                                                        </form>
                                                        <br><br>
                                                    </div>
                                                    <?php
                                                    while ($row = mysqli_fetch_assoc($result)) {

                                                        echo '<div>
                <div class="row item">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="coverItem"><img width="140" height="210" src=" ' . 'http://localhost/finalProject/' . $row['cover'] . '"
                                                    class="img-responsive"/>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-7 informationItem">
                        <h3 class="title">' . $row['title'] . '</h3>
                        <h5 class="authorName">by <a href="author.php?author_id=' . $row['author_id'] . '"> ' . $row['authorName'] . '</a></h5>
                        <span class="ratingValue"> ISBN Number : ' . $row['ISBNNumber'] . '</span>
                        <h5 class="authorName">from  <a href="publish_house.php?ph_id=' . $row['ph_id'] . '"> ' . $row['house_name'] . '</a></h5>
                        <h5 class="authorName">from  <a href="category.php?cat_id=' . $row['cat_id'] . '">  ' . $row['CategoryName'] . ' Category</a></h5>

                    </div>
            </div>
            <hr> </div>';

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

        </div>
    </div>
</div>


            <script src="js/jquery.js"></script>
            <script src="js/price-range.js"></script>
            <script src="js/main.js"></script>
</body>
<footer class="container-fluid">
    <div class="container">
        <div class="row copyright">
            <div class="col-lg-12"> <span>Copyright © 2017 BREMS | All Rights Reserved</span> </div>
        </div>
    </div>
</footer>

</html>
