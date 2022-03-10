<?php
include_once '../database/db_connection.php';
session_start();
if ((!$_SESSION['is_login'])) {
    header('location:http://localhost/finalProject/admin/login.php');

}else {

if(isset($_GET['del'])) {
    $del_id=$_GET['del'];
    $delete = "DELETE FROM authors WHERE id = $del_id";
    $result = mysqli_query($connection, $delete);
    if ($result) {
        echo '<div class="row">  <div class="col-lg-12">  <div class="alert-success"> 1 row deleted </div>  </div>   </div>';
    } else echo '<div class="row">  <div class="col-lg-12">  <div class="alert-danger"> No rows deleted </div>  </div>   </div>';
    header('location:author_management.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator Panel | Books</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/AdminLTE.min.css">

    <link rel="stylesheet" href="css/skins/skin-purple.min.css">
</head>

<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="home.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>Books</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Books</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Menu</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="img/icon-profile.png" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">Administrator</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="img/icon-profile.png" class="img-circle" alt="User Image">
                                <p>
                                    Books Administrator
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="../logout.php" class="btn btn-default btn-flat">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="img/icon-profile.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Administrator</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Look for...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">Menu</li>
                <!-- Optionally, you can add icons to the links -->
                <li><a href="home.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
                <li><a href="books_management.php"><i class="fa fa-book"></i> <span>Books</span></a></li>
                <li class="active"><a href="author_management.php"><i class="fa fa-user"></i> <span>Authors</span></a></li>
                <li><a href="publishing_houses_management.php"><i class="fa fa-home"></i> <span>publishing houses</span></a></li>
                <li><a href="categories_management.php"><i class="fa fa-file-archive-o"></i> <span>Categories</span></a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Author administration
                <small>Manage resource Authors</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Author</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Your Page Content Here -->
            <table class="table table-bordered table-striped" style="background-color: white !important;">
                <col width="16%">
                <col width="4%">
                <col width="65%">
                <thead>
                <tr>
                    <th>Picture</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Administrator</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $get_books = "SELECT * FROM authors ORDER BY id";

                $result = mysqli_query($connection, $get_books);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr><td>' . '<img width="150" height="150" src=" '.'http://localhost/finalProject/' . $row['picture']. ' "> </td> <td>' . $row['id'] . '</td> <td>' . $row['authorName'] . '</td>
                  <td>
                   <a href="edit_author.php?book_id='. $row['id'] .' "><button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button> 
                   <a href="author_management.php?del='. $row['id'] .' "" >  <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                  </td> </tr>';
                    }
                }else echo 'No Data found 😑';
                ?>

                </tbody>
            </table>
            <a href="add_author.php">
                <button type="button" class="btn btn-primary"><span class="fa fa-plus-circle"> </span> &nbsp; Add Author</button>
            </a>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- Default to the left -->
        <strong>Copyright &copy; 2021 <a href="../index.php">Books</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="js/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/app.min.js"></script>
</body>

</html>

    <?php
}

?>