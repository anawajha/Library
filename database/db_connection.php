<?php
$connection = mysqli_connect('localhost','root','','library');
if (!$connection){
    echo "Connection Error" . "<br>";
    $connection.die('connection Error '.mysqli_connect_error() .'<br>');
}

?>