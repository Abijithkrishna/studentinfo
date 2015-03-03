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
        <div class="col-xs-8">
            <?php
            if($conn = connectSQL($dbdetails)){
                $sql= "select username,password,type from users where username='".$_POST['username']."' && password='".$_POST['password']."' limit 1";
                if($rs=$conn->query($sql))
                {
                }
                else{
                        echo "Invalid UserName or password";
                        header("Refresh:1,index.php");
                    }
                }
                else
                {
                    $conn->error;
                }
            }
            else{
                echo "unable to connect";
                header("Refresh:1,index.php");
            }
            ?>
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