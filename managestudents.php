<?php
session_start();
if(isset($_SESSION["uname"]) && $_SESSION["type"]=="admin") {

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Vignesh P Vijay">
        <title>Student Information System</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/dataTables.bootstrap.css">
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
                    <li><a href="managestudents.php">Students</a></li>
                    <li><a href="managestaff.php">Staff</a></li>
                    <li><a href="resultoverview.php">Results</a></li>
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
                    <a href="addstudents.php" class="list-group-item">Add Students</a>
                    <a href="editstudent.php" class="list-group-item">Edit Student Details</a>
                    <a href="removestudent.php" class="list-group-item">Remove Student</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <p class="pull-left visible-xs">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                </p>

                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-bordered table-hover table-striped" id="mytable">
                            <thead>
                            <tr>
                                <th>Admission Number</th>
                                <th>Name</th>
                                <th>Register Number</th>
                                <th>Department</th>
                                <th><button class="btn btn-warning addst">Add Student</button></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            require("displaytable.php");
                            printtable("student");
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>
    </body>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <script src="js/script.js"></script>
    </html>
<?php
}
else{
    header("location:index.php");
}
?>