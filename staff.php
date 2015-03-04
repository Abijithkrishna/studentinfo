<?php
session_start();
if(isset($_SESSION["uname"]) && $_SESSION["type"]=="staff") {
    ?>
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
                <a href="admin.php" class="navbar-brand" id="navbaradjust">
                    <img src="images/logo.png" alt="Logo">
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mobnav">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION["uname"];?><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" id="wrap">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                <div class="list-group">
                    <a href="" class="list-group-item disabled">Side Navbar</a>
                    <a href="staffstudents.php" class="list-group-item">Manage Student Details</a>
                    <a href="studresult.php" class="list-group-item">Manage Student Results</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <p class="pull-left visible-xs">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                </p>

                <div class="row" id="main">
                    <div class="col-xs-12">
                        <?php
                            require("staffinfo.php");
                            staffinfo($_SESSION['uname']);
                        ?>
                    </div>
                </div>

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
<?php
}
else{
    header("location:index.php");
}
?>