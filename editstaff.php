<?php
session_start();
if(isset($_SESSION["uname"]) && $_SESSION["type"]=="admin") {
    require_once "praveenlib.php";
    require_once "datas.php";

    $dbconnection = connectSQL($dbdetails);

    if(mysqli_connect_errno()) //Check if any error occurred on connection
    {
        echo "db_connection_fail";
    }
    else {
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
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <h2 id="aboutheading">Edit Staff</h2>
                    <?php
                    if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $query = "select * from staff where staffid='". $id."'  limit 1";

                    if ($result=$dbconnection->query($query)){
                    if($result->num_rows==1) {


                    $row = $result->fetch_array();?>
                    <form class="form-horizontal" action="submitedits.php" method="post">
                        <div class="form-group">
                            <label for="id" class="col-sm-3 hidden-xs">Satff ID:</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="id" type="text" placeholder="Staff ID number" readonly value="<?php echo $row['staffid']; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 hidden-xs">Staff Name:</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="name" type="text" placeholder="Staff Name" required value="<?php echo $row['staffname']; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="qual" class="col-sm-3 hidden-xs">Qualifications:</label>
                            <div class="col-xs-12 col-sm-9">
                                <textarea class="form-control" name="qual" rows="2" placeholder="Degree" required><?php echo $row['qualification']; ?></textarea>
                                <p class="help-block">incase of multiple degrees use comma ,</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="addr" class="col-sm-3 hidden-xs">Contact Address</label>
                            <div class="col-xs-12 col-sm-9">
                                <textarea class="form-control" name="addr" rows="3" placeholder="door num,street,area" required><?php echo $row['address']; ?></textarea>
                                <p class="help-block">use , as a seperator for lines in address</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phn" class="col-sm-3 hidden-xs">Phone:</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="phn" type="text" placeholder="+abc-abcdefghi" required value="<?php echo $row['phone']; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pos" class="col-sm-3 hidden-xs">Position:</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="pos" type="text" placeholder="HOD/Class Incharge/Subject Staff" required value="<?php echo $row['currentpos']; ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="class" class="col-sm-3 hidden-xs">Class Handled:</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="class" type="text" placeholder="eg: BCA 3rd year" required value="<?php echo $row['classhandled']; ?>"/>
                                <p class="help-block">If its an HOD, enter his department</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 hidden-xs">Email:</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="email" type="text" placeholder="staff@kcc.edu" required value="<?php echo $row['email']; ?>"/>
                            </div>
                        </div>
                        <div class="form-group col-xs-6 pull-right">
                            <button class="btn btn-primary btn-block" value=1 name="sub">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <center>&copy <a href="https://www.facebook.com/vicunltd">Vignesh Vijay</a></center>
                </div>
            </div>
        </footer>
        <?php
        }
        }else{
            echo $dbconnection->error;
        }
        }
        else{?>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="searchs" class="col-sm-4 hidden-xs">Search by Staff id:</label>
                            <div class="col-xs-12 col-sm-8">
                                <input class="form-control" id="searchst" type="text" placeholder="number" />
                            </div>
                        </div>
                        <div class="form-group col-xs-6 pull-right">
                            <button class="btn btn-primary btn-block searchs" name="sear" type="button">Search</button>
                        </div>
                    </form>
                    </div>
        </div>
    </div>
                    <?php
        }
        ?>
        </body>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/script.js"></script>
        </html>
    <?php
    }
}
else{
    header("location:index.php");
}
?>