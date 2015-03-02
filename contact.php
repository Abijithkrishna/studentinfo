<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Vignesh P Vijay">
    <title>Student Information System</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header" id="imghead">
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobnav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand" id="navbaradjust">
                    <img src="images/logo.png" alt="Logo">
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mobnav">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="active"><a href="contact.php">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Log In <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <form action="login.php" method="POST" class="navbar-form">
                                <div class="form-group">
                                    <input type="text" placeholder="username" name="username">
                                </div>
                                <li class="divider" id="dividerx"></li>
                                <div class="form-group">
                                    <input type="password" placeholder="password" name="password">
                                </div>
                                <li class="divider" id="dividerx"></li>
                                <input class="btn btn-primary" type="submit" name="submit" value="Log In"/>
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" id="wrap">
        <div class="row" id="main">
            <div class="col-xs-12 col-sm-6">
                <h2 id="aboutheading">Contact Us!</h2>
                <form action="message.php" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <label for="comment">Comment/Query:</label>
                        <textarea name="comment" class="form-control" cols="10" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Send Message <span class="glyphicon glyphicon-send"></span></button>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div id="map-canvas"></div>
            </div>
        </div>
    </div>
    <footer class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <center>&copy <a href="hhttps://www.facebook.com/vicunltd">Vignesh Vijay</a></center>
            </div>
        </div>
    </footer>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/script.js"></script>
<script>initialize();</script>
</html>