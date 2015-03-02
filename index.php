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
				<a href="#" class="navbar-brand" id="navbaradjust">
					<img src="images/logo.png" alt="Logo">
				</a>
			</div>
		<div class="collapse navbar-collapse navbar-right" id="mobnav">
			<ul class="nav navbar-nav">
				<li><a href="">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Contact</a></li>
				<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Log In <span class="caret"></span></a>
          				<ul class="dropdown-menu" role="menu">
				           <form action="login.php" method="POST" class="navbar-form">
				           	<div class="form-group">
				           		<input type="text" placeholder="username" name="username">
				           	</div>
				           	<li class="divider" id="dividerx"></li>
				           	<div class="form-group">
				           		<input type="password" placeholder="password" name="password">
				           	</div>
				           	<li class="divider" id="dividerx"></li>
				           	<input class="btn btn-primary" type="submit" name="submit" value="Log In"/>
				           </form>
			        	</ul>
			    </li>    	
			</ul>
		</div>	
		</div>
	</nav>

	<div class="container">

	</div>
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>
</html>