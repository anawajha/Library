<?php
include_once 'db_connection.php';

$createAuthorTable = "CREATE TABLE IF NOT EXISTS authors (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  authorName VARCHAR(50) DEFAULT NULL,
  picture VARCHAR(50)
)";

if ($connection->query($createAuthorTable) === true) {
    echo 'Authors table created successfully' . '<br>';
} else echo 'Table created Failed ' . $connection->error . '<br>';


$createAdminTable = "CREATE TABLE IF NOT EXISTS admins (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  fullName VARCHAR(100) DEFAULT NULL,
  email VARCHAR(120) DEFAULT NULL,
  username VARCHAR(30) NOT NULL,
  password VARCHAR(50) NOT NULL
)";

if ($connection->query($createAdminTable) === true) {
    echo 'admins table created successfully <br>';
} else echo 'Table crated failed ' . $connection->error . '<br>';


$createPublishingHousesTable = "CREATE TABLE IF NOT EXISTS publishing_houses (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        house_name VARCHAR(60) NOT NULL,
        address VARCHAR(80) NOT NULL
)";

if ($connection->query($createPublishingHousesTable) === true) {
    echo 'Publishing houses table created successfully <br>';
} else echo 'Table crated failed ' . $connection->error . '<br>';


$createCategoriesTable = "CREATE TABLE IF NOT EXISTS categories (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  CategoryName VARCHAR(25) DEFAULT NULL
)";

if ($connection->query($createCategoriesTable) === true) {
    echo 'Categories table created successfully <br>';
} else echo 'Table crated failed ' . $connection->error . '<br>';


$createBookTable = "CREATE TABLE IF NOT EXISTS books (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(40) DEFAULT NULL,
  catId INT(11) NOT NULL,
  cover VARCHAR(50) NOT NULL,
  authorId INT(11) NOT NULL,
  phId INT(11) NOT NULL,
  ISBNNumber INT(11) NOT NULL ,
  CONSTRAINT FOREIGN KEY (authorId) REFERENCES authors(id),
  CONSTRAINT FOREIGN KEY (catId) REFERENCES categories(id),
  CONSTRAINT FOREIGN KEY (phId) REFERENCES publishing_houses(id)
  )";

if ($connection->query($createBookTable) === true) {
    echo 'Books table created successfully <br>';
} else echo 'Table crated failed ' . $connection->error . '<br>';



$insert = "INSERT INTO admins VALUES (0,'Asad F. Nawajha','anawajha@icloud.com','anawajha','**123456789**')";

if ($connection->query($insert) === true) {
    echo 'Data inserted successfully <br>';
} else echo 'Data insert failed ' . $connection->error . '<br>';

?>
