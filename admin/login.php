<?php
include_once '../database/db_connection.php';

?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Books</title>
    <!-- Boostrap Library -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/main-style.css"/>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Theme style -->

    <link rel="stylesheet" href="css/skins/skin-purple.min.css">

    <script type="text/javascript" src="../js/loginmodal.js"></script>
    <style>
        button:hover{
            opacity: 90%;
        }
    </style>
</head>
<body>

<div class="container" style="margin: 100px auto; width: 40%; padding: 3%; box-shadow: lightgray .1em .1em .1em .1em; border-radius: 10px" >
            <div style="margin-top: 0px" class="img-responsive" align="center"><img id="img_logo" width="170" src="../img/logo.jpg">
            </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM admins WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION['is_login'] = true;
            header('location:http://localhost/finalProject/admin/home.php');

            //logout unset &  destroy

        } else echo '<div class="row">  <div class="col-lg-12">  <div class="alert alert-danger"> Username or password does not correct </div>  </div>   </div>';
    }
    ?>

    <div class="col-12">
        <form action="" method="POST">
            <div class="form-group">
                <input name="username" class="form-control" placeholder="username" type="text" required style="padding: 18px;">
            </div>
            <div class="form-group">
                <input name="password" class="form-control" placeholder="password" type="password" required style="padding: 18px;">
            </div>

                <div class="form-group">
                    <button class="btn btn-primary " style="background: #0A4E4D;">login</button>
                </div>

        </form>
    </div>
        </div>
</body>

<footer>

</footer>
</html>


