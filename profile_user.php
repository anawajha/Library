

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
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="profile_user.php">Profile</a></li>
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
                <li  class="active">Profile</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h2>My profile</h2> </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="active"><a href="#">Profile</a></li>
                <li role="presentation"><a href="#">Books on loan</a></li>
                <li role="presentation"><a href="#">Loan history</a></li>
                <li role="presentation"><a href="#">Fines</a></li>
            </ul>
        </div>
    </div>
    <div class="row contentProfile">
        <div class="col-lg-12">
            <div class="row userProfile">
                <div class="col-lg-3 avatar"> <img src="img/user_undefined_f.png" /> </div>
                <div class="col-lg-8">
                    <h4>Basic information
                        <a href="#"><span class="glyphicon glyphicon-pencil"></span>( Edit )</a>
                    </h4>
                    <table class="table">
                        <thead>
                        <tr>
                            <th colspan="2">Basic information<a href="#">   Edit</a></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">Full name</th>
                            <td>Cervera Saldaña, Anny</td>
                        </tr>
                        <tr>
                            <th scope="row">User</th>
                            <td>annyCS</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>anny_cervera@hotmail.com</td>
                        </tr>
                        <tr>
                            <th scope="row">Sex</th>
                            <td>female</td>
                        </tr>
                        <tr>
                            <th scope="row">Edad</th>
                            <td>No information</td>
                        </tr>
                        <tr>
                            <th scope="row">Literary hobbies</th>
                            <td>Sci-Fi, Horror, Novel, Egyptian Literature</td>
                        </tr>
                        <tr>
                            <th scope="row" class="lastRow">Last edit</th>
                            <td>34 minutes ago</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row otherUserProfile">
                <div class="col-lg-4 biographic">
                    <h4>My biography
                        <a href="#"><span class="glyphicon glyphicon-pencil"></span>( Edit)</a>
                    </h4>
                    <p>(No information to display)</p>
                </div>
                <div class="col-lg-6 favorites">
                    <h4><span class="glyphicon glyphicon-heart"></span> My favorites list
                        <a href="#"><span class="glyphicon glyphicon-pencil"></span>( Edit)</a>
                    </h4>
                    <p>(No information to display)</p>
                </div>
            </div>
        </div>
    </div>
    <!-- // Libros en prestamos -->
    <div class="row contentBookBorrow">
        <div class="col-lg-12">
            <div class="listItems">
                <!-- // item 1 -->
                <div class="row item">
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <div class="coverItem"> <img src="resources/books/mocha_dick.jpg" />
                            <br>
                            <a href="profile_books.php" target="_blank" style="margin-top: 6px;"> <span class="glyphicon glyphicon-info-sign"></span> see book </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-7 detailsBorrow">
                        <table class="table">
                            <caption>Ref No.: <span>N-MD5660213</span></caption>
                            <tbody>
                            <tr>
                                <th>Title</th>
                                <td>Mocha Dick</td>
                            </tr>
                            <tr>
                                <th>Author</th>
                                <td>Francisco Ortega, Gonzalo Martínez</td>
                            </tr>
                            <tr>
                                <th>Loan date</th>
                                <td>26/04/2016</td>
                            </tr>
                            <tr>
                                <th>Return date</th>
                                <td>24/05/2016</td>
                            </tr>
                            <tr class="buttonAplazar visibilityHide">
                                <td colspan="2">
                                    <button type="button" class="btn btn-primary btn-sm">Defer return</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- // item 2 -->
                <div class="row item">
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <div class="coverItem"> <img src="resources/books/angeles_y_demonios.jpg" />
                            <br>
                            <a href="profile_books.php" target="_blank" style="margin-top:6px;"> <span class="glyphicon glyphicon-info-sign"></span> see book </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-7 detailsBorrow">
                        <table class="table">
                            <caption>Ref No.:<span>F-AYD5990213</span></caption>
                            <tbody>
                            <tr>
                                <th>Title</th>
                                <td>Ángeles y Demonios</td>
                            </tr>
                            <tr>
                                <th>Author</th>
                                <td>Dan Brown</td>
                            </tr>
                            <tr>
                                <th>Loan date</th>
                                <td>23/03/2016</td>
                            </tr>
                            <tr class="warning dateReturn">
                                <th>Return date</th>
                                <td>02/05/2016 <i class="fa fa-exclamation-triangle warning" aria-hidden="true"></i> <span class="warning">(7 days remaining)</span> </td>
                            </tr>
                            <tr class="buttonAplazar">
                                <td colspan="2">
                                    <button type="button" class="btn btn-primary btn-sm">Defer return</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- // item 3 -->
                <div class="row item">
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <div class="coverItem"> <img src="resources/books/diario-ana-frank.jpg" />
                            <br>
                            <a href="profile_books.php" target="_blank" style="margin-top: 6px;"> <span class="glyphicon glyphicon-info-sign"></span> see book </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-7 detailsBorrow">
                        <table class="table">
                            <caption>Ref No.:<span>H-DAF5990213</span> </caption>
                            <tbody>
                            <tr>
                                <th>Title</th>
                                <td>El diario de Ana Frank</td>
                            </tr>
                            <tr>
                                <th>Author</th>
                                <td>Ana Frank</td>
                            </tr>
                            <tr>
                                <th>Loan date</th>
                                <td>20/03/2016</td>
                            </tr>
                            <tr class="danger dateReturn">
                                <th>Return date</th>
                                <td>29/04/2016 <i class="fa fa-exclamation-triangle danger" aria-hidden="true"></i> <span class="danger">(2 days left)</span> </td>
                            </tr>
                            <tr class="buttonAplazar">
                                <td colspan="2">
                                    <button type="button" class="btn btn-primary btn-sm">Defer return</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- listItems -->
        </div>
    </div>
    <!-- contentBookBorrow -->
    <!-- historial de prestamos -->
    <div class="row contentBookHistory">
        <div class="col-lg-12">
            <div class="listItems">
                <!-- // item 1 -->
                <div class="row item">
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <div class="coverItem"> <img src="resources/books/mocha_dick.jpg" />
                            <br>
                            <a href="profile_books.php" target="_blank" style="margin-top: 6px;"> <span class="glyphicon glyphicon-info-sign"></span> see book </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-7 detailsBorrow">
                        <table class="table">
                            <caption>Ref No.:<span>N-MD5660213</span></caption>
                            <tbody>
                            <tr>
                                <th>Title</th>
                                <td>Mocha Dick</td>
                            </tr>
                            <tr>
                                <th>Author</th>
                                <td>Francisco Ortega, Gonzalo Martínez</td>
                            </tr>
                            <tr>
                                <th>Loan date</th>
                                <td>26/04/2016</td>
                            </tr>
                            <tr class="rating">
                                <th>
                                    <div class="Tooltip"> Assessment<span class="tooltipText">Total score by all users</span> </div>
                                </th>
                                <td>
                                    <ul class="stars">
                                        <li class="staticStar p10"></li>
                                        <li class="staticStar p10"></li>
                                        <li class="staticStar p10"></li>
                                        <li class="staticStar p6"></li>
                                        <li class="staticStar p0"></li>
                                    </ul> <span class="ratingValue">3.66</span> </td>
                            </tr>
                            <tr class="myRating">
                                <th>
                                    <div class="Tooltip">My assessment<span class="tooltipText">User personal score</span> </div>
                                </th>
                                <td>
                                    <ul class="stars">
                                        <li class="staticStar p0"></li>
                                        <li class="staticStar p0"></li>
                                        <li class="staticStar p0"></li>
                                        <li class="staticStar p0"></li>
                                        <li class="staticStar p0"></li>
                                    </ul> <span class="ratingValue">0</span> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- // item 2 -->
                <div class="row item">
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <div class="coverItem"> <img src="resources/books/angeles_y_demonios.jpg" />
                            <br>
                            <a href="profile_books.php" target="_blank" style="margin-top: 6px;"> <span class="glyphicon glyphicon-info-sign"></span> see book </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-7 detailsBorrow">
                        <table class="table">
                            <caption>Ref No: <span>F-AYD5990213</span></caption>
                            <tbody>
                            <tr>
                                <th>Title</th>
                                <td>Ángeles y Demonios</td>
                            </tr>
                            <tr>
                                <th>Author</th>
                                <td>Dan Brown</td>
                            </tr>
                            <tr>
                                <th>Loan date</th>
                                <td>23/03/2016</td>
                            </tr>
                            <tr class="rating">
                                <th>
                                    <div class="Tooltip"> Assessment <span class="tooltipText">Total score by all users</span> </div>
                                </th>
                                <td>
                                    <ul class="stars">
                                        <li class="staticStar p10"></li>
                                        <li class="staticStar p10"></li>
                                        <li class="staticStar p10"></li>
                                        <li class="staticStar p6"></li>
                                        <li class="staticStar p0"></li>
                                    </ul> <span class="ratingValue">3.66</span> </td>
                            </tr>
                            <tr class="myRating">
                                <th>
                                    <div class="Tooltip">My assessment<span class="tooltipText">User personal score</span> </div>
                                </th>
                                <td>
                                    <ul class="stars">
                                        <li class="staticStar p0"></li>
                                        <li class="staticStar p0"></li>
                                        <li class="staticStar p0"></li>
                                        <li class="staticStar p0"></li>
                                        <li class="staticStar p0"></li>
                                    </ul> <span class="ratingValue">0</span> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- // item 3 -->
                <div class="row item">
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <div class="coverItem"> <img src="resources/books/diario-ana-frank.jpg" />
                            <br>
                            <a href="profile_books.php" target="_blank" style="margin-top: 6px;"> <span class="glyphicon glyphicon-info-sign"></span> see book </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-7 detailsBorrow">
                        <table class="table">
                            <caption>Ref No: <span>H-DAF5990213</span> </caption>
                            <tbody>
                            <tr>
                                <th>Title</th>
                                <td>El diario de Ana Frank</td>
                            </tr>
                            <tr>
                                <th>Author</th>
                                <td>Ana Frank</td>
                            </tr>
                            <tr>
                                <th>Loan date</th>
                                <td>20/03/2016</td>
                            </tr>
                            <tr class="rating">
                                <th>
                                    <div class="Tooltip"> Assessment <span class="tooltipText">Total score by all users</span> </div>
                                </th>
                                <td>
                                    <ul class="stars">
                                        <li class="staticStar p10"></li>
                                        <li class="staticStar p10"></li>
                                        <li class="staticStar p10"></li>
                                        <li class="staticStar p6"></li>
                                        <li class="staticStar p0"></li>
                                    </ul> <span class="ratingValue">3.66</span> </td>
                            </tr>
                            <tr class="myRating">
                                <th>
                                    <div class="Tooltip"> My assessment <span class="tooltipText">User personal score</span> </div>
                                </th>
                                <td>
                                    <ul class="stars">
                                        <li class="staticStar p0"></li>
                                        <li class="staticStar p0"></li>
                                        <li class="staticStar p0"></li>
                                        <li class="staticStar p0"></li>
                                        <li class="staticStar p0"></li>
                                    </ul> <span class="ratingValue">0</span> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- listItems -->
        </div>
    </div>
    <!-- multas -->
    <div class="row contentFine"> </div>
</div>
<footer class="container-fluid">
    <div class="container">
        <div class="row copyright">
            <div class="col-lg-12"> <span>Copyright © 2021 Books | All rights reserved.</span> </div>
        </div>
    </div>
</footer>
</body>

</html>
