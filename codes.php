<?php
include_once 'database/db_connection.php';


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