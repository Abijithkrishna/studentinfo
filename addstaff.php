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
                    <li><a href="alerts.php">Alerts</a></li>
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
                    <div class="form-group">
                        <label for="qual" class="col-sm-3 hidden-xs">Qualifications:</label>
                        <div class="col-xs-12 col-sm-9">
                            <textarea class="form-control" name="qual" rows="2" placeholder="Degree" required></textarea>
                            <p class="help-block">incase of multiple degrees use comma ,</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="addr" class="col-sm-3 hidden-xs">Contact Address</label>
                        <div class="col-xs-12 col-sm-9">
                            <textarea class="form-control" name="addr" rows="3" placeholder="door num,street,area" required></textarea>
                            <p class="help-block">use , as a seperator for lines in address</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phn" class="col-sm-3 hidden-xs">Phone:</label>
                        <div class="col-xs-12 col-sm-9">
                            <input class="form-control" name="phn" type="text" placeholder="+abc-abcdefghi" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pos" class="col-sm-3 hidden-xs">Position:</label>
                        <div class="col-xs-12 col-sm-9">
                            <input class="form-control" name="pos" type="text" placeholder="HOD/Class Incharge/Subject Staff" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="class" class="col-sm-3 hidden-xs">Class Handled:</label>
                        <div class="col-xs-12 col-sm-9">
                            <input class="form-control" name="class" type="text" placeholder="eg: BCA 3rd year" required/>
                            <p class="help-block">If its an HOD, enter his department</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 hidden-xs">Email:</label>
                        <div class="col-xs-12 col-sm-9">
                            <input class="form-control" name="email" type="text" placeholder="staff@kcc.edu" required/>
                        </div>
                    </div>
                    <div class="form-group col-xs-6 pull-right">
                        <button class="btn btn-primary btn-block">Add</button>
                    </div>
                </form>
            </div>
            <div class="col-xs-6">
                <h2 id="aboutheading">Upload Details</h2>
                <form action="uploads.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="fileup">File Upload</label>
                        <input type="file" name="csv" id="csv"/>
                        <p class="help-block">Upload Csv file in the specified format.</p>
                    </div>
                    <div class="form-group col-xs-offset-6 col-xs-6">
                        <button class="btn btn-info btn-block" type="submit" name="submit" value="submit">Upload!</button>
                    </div>
                </form>
                <div class="col-xs-12">
                    <hr/>
                    <h5>Format:</h5>
                    <ul>
                        <li>CSV file with 8 feilds</li>
                        <li>Feilds should be same as those in the form on the left</li>
                        <li>Feild order should not be changed.</li>
                        <li>Values should be separated by ;</li>
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