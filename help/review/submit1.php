<?php

$servername="localhost";
$username="root";  
$password="";  
$dbname="review";
$conn=mysqli_connect($servername,$username,$password,$dbname); 
if($conn->connect_error) 
{ 
die("connection failed : ".$conn->connect_error);
}


?>
<!--
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Review</title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link rel="stylesheet" href="css/style.css">
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12"><center><h2>Review Form</h2></center></div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<center>
				<div class="panel panel-primary">
  					<div class="panel-body">
  					-->
				
<?php

if(isset($_POST['name'])&&isset($_POST['pid'])&&isset($_POST['rate'])&&isset($_POST['comm'])){
	$query="insert into rev(name,pid,rating,comment) values('".$_POST['name']."','".$_POST['pid']."','".$_POST['rate']."','".$_POST['comm']."')";
	$result=mysqli_query($conn,$query);
}

		close($conn);		
?>
<!--					</div>
				</div>
			</center>
		</div>
	</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>-->