<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>PHP Search</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
            <div class="row">

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

                <br>
                <br>
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
</body>
</html>