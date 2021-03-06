<?php
session_start();
if(isset($_SESSION["uname"]) && $_SESSION["type"]=="staff") {
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
                    <a href="staff.php" class="navbar-brand" id="navbaradjust">
                        <img src="images/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-right" id="mobnav">
                    <ul class="nav navbar-nav">
                        <li><a href="staffstudents.php">Students</a></li>
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
                    <h2 id="aboutheading">Edit Student</h2>
                    <?php
                    if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $query = "select * from studentdetails where admissionnum='". $id."'  limit 1";

                    if ($result=$dbconnection->query($query)){
                    if($result->num_rows==1) {


                    $row = $result->fetch_array();?>
                    <form class="form-horizontal" action="submiteditstaff.php" method="post">
                        <div class="form-group">
                            <label for="name" class="col-sm-3 hidden-xs">Name:</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="name" type="text" placeholder="Name" required value="<?php echo $row['name'] ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anum" class="col-sm-3 hidden-xs">Admission Num:</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="anum" type="text" placeholder="Admission Number" readonly value="<?php echo $row['admissionnum'] ?>" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fname" class="col-sm-3 hidden-xs">Fathers Name:</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="fname" type="text" placeholder="Fathers Name" required value="<?php echo $row['father'] ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mname" class="col-sm-3 hidden-xs">Mothers Name:</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="mname" type="text" placeholder="Mothers Name" required value="<?php echo $row['mother'] ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rnum" class="col-sm-3 hidden-xs">Register Num:</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="rnum" type="text" placeholder="Register Number" readonly required value="<?php echo $row['regno'] ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dob" class="col-sm-3 hidden-xs">DOB:</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="dob" type="date" placeholder="DD/MM/YYYY" required value="<?php echo $row['dob'] ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="course" class="col-sm-3 hidden-xs">Course</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="course" type="text" placeholder="Course" required value="<?php echo $row['course'] ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="native" class="col-sm-3 hidden-xs">Native</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="native" placeholder="Native Country" type="text" required value="<?php echo $row['native'] ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="reli" class="col-sm-3 hidden-xs">Religion</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="reli" type="text" placeholder="Religion" required value="<?php echo $row['religion'] ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="addr" class="col-sm-3 hidden-xs">Contact Address</label>
                            <div class="col-xs-12 col-sm-9">
                                <textarea class="form-control" name="addr" cols="10" rows="5" placeholder="door num,street,area" required><?php echo $row['address'] ?></textarea>
                                <p class="help-block">use , as a seperator for lines in address</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="col-sm-3 hidden-xs">Mobile</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="mobile" type="text" placeholder="+abc-abcdefghi" required value="<?php echo $row['mobile'] ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-3 hidden-xs">Email ID</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="email" type="email" placeholder="abc@def.ghi" value="<?php echo $row['email'] ?>"/>
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
                            <label for="search" class="col-sm-4 hidden-xs">Search by Admission Number:</label>
                            <div class="col-xs-12 col-sm-8">
                                <input class="form-control" id="search" type="text" placeholder="number" />
                            </div>
                        </div>
                        <div class="form-group col-xs-6 pull-right">
                            <button class="btn btn-primary btn-block searchstaff" name="sear" type="button">Search</button>
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