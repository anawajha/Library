

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
                    <li class="active"><a href="contact.php">Contact</a></li>
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
                <li class="active">Contact us</li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div id="map_model">
                <div id="gmap_canvas"></div>
            </div>
        </div>
    </div>
    <br/>
    <!-- https://codepen.io/jaycbrf/pen/iBszr -->
    <form class="well form-horizontal" action=" " method="post" id="contact_form">
        <fieldset>
            <!-- Form Name -->
            <legend>Contact us</legend>
            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label">Reason for your inquiry</label>
                <div class="col-md-4 selectContainer">
                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                        <select name="state" class="form-control selectpicker">
                            <option value=" ">Select a reason</option>
                            <option>Library card</option>
                            <option>Suggestion</option>
                            <option>Complain</option>
                            <option>Problem with a loan</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="first_name" placeholder="Name" class="form-control" type="text"> </div>
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">EMail</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input name="email" placeholder="Email address" class="form-control" type="email"> </div>
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">Telephone contact</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="phone" placeholder="Ex. 603245678" class="form-control" type="text"> </div>
                </div>
            </div>
            <!-- radio checks -->
            <div class="form-group">
                <label class="col-md-4 control-label">Are you a Books customer?</label>
                <div class="col-md-4">
                    <div class="radio">
                        <label>
                            <input type="radio" name="hosting" value="yes" /> Yes I am. </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="hosting" value="no" /> No. </label>
                    </div>
                </div>
            </div>
            <!-- Text area -->
            <div class="form-group">
                <label class="col-md-4 control-label">Message</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea class="form-control" name="comment" placeholder="Message"></textarea>
                    </div>
                </div>
            </div>
            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">Sent <i class="glyphicon glyphicon-thumbs-up"></i> Thank you for contacting us.</div>
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-warning">Send <span class="glyphicon glyphicon-send"></span></button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<!-- /.container -->
<footer class="container-fluid">
    <div class="container">
        <div class="row copyright">
            <div class="col-lg-12"> <span>Copyright © 2021 Books | All rights reserved.</span> </div>
        </div>
    </div>
    <script type='text/javascript'>
        function init_map() {
            var myOptions = {
                zoom: 15
                , center: new google.maps.LatLng(40.4335419, -3.6472188000000187)
                , mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
            marker = new google.maps.Marker({
                map: map
                , position: new google.maps.LatLng(40.4335419, -3.6472188000000187)
            });
            infowindow = new google.maps.InfoWindow({
                content: '<strong>BREMS</strong><br>C/ Alcalá<br>28939 Madrid<br>'
            });
            google.maps.event.addListener(marker, 'click', function () {
                infowindow.open(map, marker);
            });
            infowindow.open(map, marker);
        }
        google.maps.event.addDomListener(window, 'load', init_map);
    </script>
</footer>
</body>

</html>
