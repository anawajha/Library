

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
                    <li class="active"><a href="about.php">About us</a></li>
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
                <li class="active">About Books</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 titulo">
            <h2>About us</h2></div>
    </div>
    <div class="row"><img class="imag" src="resources/others/library.jpg">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry standard filler text since the 1500s, when a printer (N. of T. person who sells
            engaged in printing) unknown used a gallery of texts and mixed them in such a way that he managed to make a
            textbook specimen. Not only did it survive 500 years, but it also entered as filler text in
            electronic documents, remaining essentially the same as the original. It was popularized in the 1960s with the
            creation of the "Letraset" sheets, which contained passages from Lorem Ipsum, and more recently with
            desktop publishing software, such as Aldus PageMaker, which includes versions of Lorem Ipsum.</p>
        <p>It is an established fact too long ago that a reader will be distracted by the content of a text.
            site while looking at your design. The point of using Lorem Ipsum is that it has a distribution more or less
            normal letters, as opposed to using texts such as "Content here, content here." These
            texts make it look like Spanish that can be read. Many desktop publishing packages and page editors
            web use the Lorem Ipsum as their default text, and when doing a search for "Lorem Ipsum" it will give
            Many websites using this text result if they are under development. Many versions
            They have evolved.</p>
        <p>Contrary to popular thought, Lorem Ipsum's text is not simply random text. It has
            roots in a classic piece of Latin literature, dating from 45 BC, making
            this acquires more than 2000 years old. Richard McClintock, a Latin professor at the University of
            Hampden-Sydney in Virginia, found one of the darkest words in the Latin language, "consecteur",
            In a passage from Lorem Ipsum, and as he continued reading different Latin texts, he discovered the undoubted source.
            Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finnibus Bonorum et Malorum" (The Ends of the
            Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of
            ethical, very popular during the Renaissance. The first line of the Lorem Ipsum, "Lorem ipsum pain sit
            amet .. ", comes from a line in section 1.10.32</p>
        <p>There are many variations of the Lorem Ipsum passages available, but most were altered in
            somehow, either because he added humor to it, or random words that don't seem the least bit believable.
            If you are going to use a passage from Lorem Ipsum, you need to be sure that there is nothing shameful hidden
            in the middle of the text. All Lorem Ipsum generators found on the internet tend to repeat
            predefined chunks when needed, making this the only true (valid) generator in the
            Internet. Use a dictionary of more than 200 words from Latin, combined with very
            Sentence tools, to generate reasonable-looking Lorem Ipsum text. This Lorem Ipsum generated
            it will always be free of repetitions, added humor or words not characteristic of the language, etc.</p>
    </div>
    <hr>
    <div class="row">
        <h3>Click to enlarge </h3>
        <br></div>
    <div class="row libimages">
        <div class="col-lg-3"><img class="imag imagmodal" src="resources/others/library.jpg" width="100%" height="100%"></div>
        <div class="col-lg-3"><img class="imag imagmodal" src="resources/others/library2.jpg" width="100%" height="100%"></div>
        <div class="col-lg-3"><img class="imag imagmodal" src="resources/others/library3.jpg" width="100%" height="100%"></div>
        <div class="col-lg-3"><img class="imag imagmodal" src="resources/others/library4.jpg" width="100%" height="100%"></div>


    </div>
</div>
<br>
<footer class="container-fluid">
    <div class="container">
        <div class="row copyright">
            <div class="col-lg-12"><span>Copyright © 2021 Books | All rights reserved.</span></div>
        </div>
    </div>
</footer>
</body>

</html>