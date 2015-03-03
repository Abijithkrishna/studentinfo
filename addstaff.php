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
        <div class="row">
            <div class="col-xs-6">
                <h2 id="aboutheading">Add Staff</h2>

                <form class="form-horizontal" action="adds.php" method="post">
                    <div class="form-group">
                        <label for="id" class="col-sm-3 hidden-xs">Satff ID:</label>
                        <div class="col-xs-12 col-sm-9">
                            <input class="form-control" name="id" type="text" placeholder="Staff ID number" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 hidden-xs">Staff Name:</label>
                        <div class="col-xs-12 col-sm-9">
                            <input class="form-control" name="name" type="text" placeholder="Staff Name" required/>
                        </div>
                    </div>
                    <div class="form-group col-xs-6 pull-right">
                        <button class="btn btn-primary btn-block">Add</button>
                    </div>
                </form>
            </div>
            <div class="col-xs-6">
                <h2 id="aboutheading">Upload Details</h2>
                <form action="upload.php" method="post">
                    <div class="form-group">
                        <label for="fileup">File Upload</label>
                        <input class="" type="file"/>
                        <p class="help-block">Upload only excel or Csv file in the specified format.</p>
                    </div>
                    <div class="form-group col-xs-offset-6 col-xs-6">
                        <button class="btn btn-info btn-block" type="submit">Upload!</button>
                    </div>
                </form>
                <div class="col-xs-12">
                    <hr/>
                    <h5>Format:</h5>
                    <ul>
                        <li>Excel or CSV file with 2 feilds</li>
                        <li>Feilds should be same as those in the form on the left</li>
                        <li>Feild order should not be changed.</li>
                    </ul>
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