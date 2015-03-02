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
                    <img class="img-responsive" src="images/logo.png" alt="Logo">
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mobnav">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
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

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <center>
                   <img src="images/about.jpg" class="img-responsive" alt="About"/>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h1 id="aboutheading">About KCC</h1>
            </div>
            <div class="col-xs-10">
                <p>Kodaikanal Christian College stands apart from other educational institutions in its educational
                    and spiritual focus to provide students with a holistic education that addresses mind, body and soul.
                    At KCC, education has always been linked to ethical and moral growth of the individual.
                    It is the heart of the institution to make sure every student that leaves the college not only gets the best education possible, but also is transformed into the best citizen of their country through value-oriented scholarship.
                </p>
                <p>
                    Our sister organization, Paradise Academy offers many courses of study,
                    along side the university curriculum, to enrich each student’s learning experience and
                    prepare him or her for the ever-changing needs of the global job market.
                    The Academy awards students free diplomas along with their degree syllabi.
                </p>
                <p>Kodaikanal Christian College stands by its motto,
                    ‘Born to Lead” and strives to mold ever student into a future leader through
                    an educational system that builds on a value system based on righteousness and goodness.
                    It is only through a value-oriented education that a nation can be transformed and a world changed.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h2 id="aboutheading">About Project</h2>
            </div>
            <div class="col-xs-10">
                <p>
                    The Student Information System is a project done by Vignesh P.Vijay of BCA final year student of KCC.
                    This System aims to manage the student's of a college, currently it works for a single department.
                </p>
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
<script src="js/script.js"></script>
</html>