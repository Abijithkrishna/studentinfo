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
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <h2 id="aboutheading">Edit Message</h2>
                    <?php
                    if (isset($_GET['id'])) {

                    $id = $_GET['id'];
                    $query = "select * from alerts where msgid='". $id."'  limit 1";

                    if ($result=$dbconnection->query($query)){
                    if($result->num_rows==1) {


                    $row = $result->fetch_array();?>
                    <form class="form-horizontal" action="submiteditmsg.php" method="post">
                        <div class="form-group">
                            <label for="msgid" class="col-sm-3 hidden-xs">Message ID:</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="msgid" type="text" placeholder="Name" required readonly value="<?php echo $row['msgid'] ?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="msg" class="col-sm-3 hidden-xs">Message:</label>
                            <div class="col-xs-12 col-sm-9">
                                <input class="form-control" name="msg" type="text" placeholder="Name" required value="<?php echo $row['message'] ?>"/>
                            </div>
                        </div>
                        <div class="form-group col-xs-6 pull-right">
                            <button class="btn btn-primary btn-block" name="sub">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        }
        }else{
            echo $dbconnection->error;
        }
        }
        ?>        </body>
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