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
                <a href="staff.php" class="navbar-brand" id="navbaradjust">
                    <img src="images/logo.png" alt="Logo">
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mobnav">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="staffstudents.php">Students</a></li>
                    <li><a href="studresults.php">Results</a></li>
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
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <h2 id="aboutheading">Student Results</h2>
                <button class="btn btn-info redit pull-right">Edit Previous Result</button>
                <form class="form-horizontal" action="result.php" method="post">
                    <div class="form-group">
                        <label class="col-sm-4 hidden-xs" for="regno">Register Number: </label>
                        <div class="col-xs-12 col-sm-4">
                            <input class="form-control" type="text" id="regno" name="regno" placeholder="Register number"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 hidden-xs" for="semester">Semester: </label>
                        <div class="col-xs-12 col-sm-8">
                            <select class="form-control" name="semester" id="semester">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 col-sm-4">
                            <input type="text" class="form-control" name="sub1" placeholder="subject Code"/>
                        </div>
                        <div class="col-xs-6 col-sm-8">
                            <input type="text" class="form-control" name="mark1" placeholder="grade"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 col-sm-4">
                            <input type="text" class="form-control" name="sub2" placeholder="subject Code"/>
                        </div>
                        <div class="col-xs-6 col-sm-8">
                            <input type="text" class="form-control" name="mark2" placeholder="grade"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 col-sm-4">
                            <input type="text" class="form-control" name="sub3" placeholder="subject Code"/>
                        </div>
                        <div class="col-xs-6 col-sm-8">
                            <input type="text" class="form-control" name="mark3" placeholder="grade"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 col-sm-4">
                            <input type="text" class="form-control" name="sub4" placeholder="subject Code"/>
                        </div>
                        <div class="col-xs-6 col-sm-8">
                            <input type="text" class="form-control" name="mark4" placeholder="grade"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 col-sm-4">
                            <input type="text" class="form-control" name="sub5" placeholder="subject Code"/>
                        </div>
                        <div class="col-xs-6 col-sm-8">
                            <input type="text" class="form-control" name="mark5" placeholder="grade"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 col-sm-4">
                            <input type="text" class="form-control" name="sub6" placeholder="subject Code"/>
                        </div>
                        <div class="col-xs-6 col-sm-8">
                            <input type="text" class="form-control" name="mark6" placeholder="grade"/>
                        </div>
                    </div>
                    <div class="form-group col-xs-6 pull-right">
                        <button class="btn btn-primary btn-block">Add Result</button>
                    </div>
                </form>
                <p class="help-block">* select semester and register number to edit</p>
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