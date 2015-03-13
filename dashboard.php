<?php
session_start();
if(isset($_SESSION["uname"]) && $_SESSION["type"]=="student") {
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
                    <li><a href="studentinfo.php">Details</a></li>
                    <li><a href="studresult.php">Results</a></li>
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

    <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                <div class="list-group">
                    <a href="" class="list-group-item disabled">Side Navbar</a>
                    <a href="studentinfo.php" class="list-group-item">Info</a>
                    <a href="studresult.php" class="list-group-item">Student Results</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <p class="pull-left visible-xs">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                </p>
                <div class="jumbotron">
                    <h2 id="aboutheading">Welcome <?php
                        require('praveenlib.php');
                        require('datas.php');
                        if($conn = connectSQL($dbdetails)) {
                            $sql = "select * from studentdetails where regno='" . $_SESSION['uname'] . "' limit 1";
                            if ($rs = $conn->query($sql)) {
                                $count = $rs->num_rows;
                                if ($count > 0) {
                                    $row = $rs->fetch_array();
                                    echo $row['name'];
                                }
                            }
                        }
                        ?>
                         !</h2>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                    </div>
                </div>

            </div>

        </div>
    </div>
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