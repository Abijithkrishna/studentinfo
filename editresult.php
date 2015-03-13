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
                    <h2 id="aboutheading">Edit Result</h2>
                    <?php
                    if (isset($_GET['reg']) && isset($_GET['sem'])) {

                    $reg = $_GET['reg'];
                    $sem = $_GET['sem'];
                    $query = "select * from result where regno='". $reg."' and semester=".$sem;

                    if ($result=$dbconnection->query($query)){
                    if($result->num_rows==6) {

                    $reg = $_GET['reg'];
                    $sem = $_GET['sem'];

                    ?>

                    <form class="form-horizontal" action="updateresult.php" method="post">

                        <?php
                        $i=1;
                        $flag=0;
                        while($row = $result->fetch_array()){
                            if($flag++==0){
                                echo '<div class="form-group"><label class="col-sm-4 hidden-xs" for="regno">Register Number: </label><div class="col-xs-12 col-sm-4">';
                                echo '<input class="form-control" type="text" id="regno" name="regno" value="'.$row['regno'].'" readonly/> </div> </div>';
                                echo '<div class="form-group"><label class="col-sm-4 hidden-xs" for="semester">Semester: </label><div class="col-xs-12 col-sm-4">';
                                echo '<input class="form-control" type="text" id="semester" name="semester" value="'.$row['semester'].'" readonly/> </div> </div>';

                            }
                            echo '<div class="form-group"><div class="col-xs-6 col-sm-4">';
                            echo '<input type="text" class="form-control" name="sub'.$i.'" value="'.$row['subcode'].'" readonly/></div>';
                            echo '<div class="col-xs-6 col-sm-8">';
                            echo '       <input type="text" class="form-control" name="mark'.$i.'" value="'.$row['grade'].'"/>';
                            echo '</div></div>';
                            $i++;
                        }
                        ?>
                        <div class="form-group col-xs-6 pull-right">
                            <button class="btn btn-primary btn-block" type="submit">Update Result</button>
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
        else{
            echo "Invalid register number or unknown semester";
        }
        }else{
            echo $dbconnection->error;
        }
        }
        else{?>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="regnox" class="col-sm-4 hidden-xs">Register Number:</label>
                            <div class="col-xs-12 col-sm-8">
                                <input class="form-control" id="regnox" type="text" placeholder="reg number" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="semesterx" class="col-sm-4 hidden-xs">Semester:</label>
                            <div class="col-xs-12 col-sm-8">
                                <input class="form-control" id="semesterx" type="text" placeholder="Semester" />
                            </div>
                        </div>
                        <div class="form-group col-xs-6 pull-right">
                            <button class="btn btn-primary btn-block searchres"  type="button">Search</button>
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