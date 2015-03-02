 <!doctype html>
<html>
<head>
<title>Edufee</title>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- Nice Scroll -->
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.draggable.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
	<!-- Touch enable for jquery UI -->
	<script src="js/plugins/touch-punch/jquery.touch-punch.min.js"></script>
	<!-- slimScroll -->
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>

	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="js/demonstration.min.js"></script>
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>

<body>
	<div id="navigation">
		<div class="container-fluid">
			<a href="#" id="brand"></a>
			<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"><i class="icon-reorder"></i></a>
			<ul class='main-nav'>
				<li>
					<a href="index.html">
						<i class="icon-home"></i>
						<span>Dashboard</span>
					</a>
				</li>
				
				
			</ul>
			<div class="user">
				<ul class="icon-nav">
					<li class="dropdown sett">
						<a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-cog"></i></a>
						<ul class="dropdown-menu pull-right theme-settings">
							<li>
								<span>Layout-width</span>
								<div class="version-toggle">
									<a href="#" class='set-fixed'>Fixed</a>
									<a href="#" class="active set-fluid">Fluid</a>
								</div>
							</li>
							<li>
								<span>Topbar</span>
								<div class="topbar-toggle">
									<a href="#" class='set-topbar-fixed'>Fixed</a>
									<a href="#" class="active set-topbar-default">Default</a>
								</div>
							</li>
							<li>
								<span>Sidebar</span>
								<div class="sidebar-toggle">
									<a href="#" class='set-sidebar-fixed'>Fixed</a>
									<a href="#" class="active set-sidebar-default">Default</a>
								</div>
							</li>
						</ul>
					</li>
					<li class='dropdown colo'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown"><i class="icon-tint"></i></a>
						<ul class="dropdown-menu pull-right theme-colors">
							<li class="subtitle">
								Predefined colors
							</li>
							<li>
								<span class='red'></span>
								<span class='orange'></span>
								<span class='green'></span>
								<span class="brown"></span>
								<span class="blue"></span>
								<span class='lime'></span>
								<span class="teal"></span>
								<span class="purple"></span>
								<span class="pink"></span>
								<span class="magenta"></span>
								<span class="grey"></span>
								<span class="darkblue"></span>
								<span class="lightred"></span>
								<span class="lightgrey"></span>
								<span class="satblue"></span>
								<span class="satgreen"></span>
							</li>
						</ul>
					</li>
					
				</ul>
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown">John Doe <img src="img/demo/user-avatar.jpg" alt=""></a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="more-userprofile.html">Edit profile</a>
						</li>
						<li>
							<a href="#">Account settings</a>
						</li>
						<li>
							<a href="more-login.html">Sign out</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="content">
		<?php 
require_once "cms.php";
printLeft();
?>
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Vehicle Details</h1>
					</div>
					<div class="pull-right">
					    <ul class="minitiles" style="display:inline !important;">
					    	<li><a href="tm_main.html"><img src="img/tm_icon.png" alt=""></a></li>
					     
					        <li><a href="http://www.edufee.com/subscribe_donation/"><img src="img/dm_icon.png" alt=""></a></li>
					     
					        <li> <a href="http://www.edufee.com/SIS/home/"><img src="img/sis_icon.png" alt="" style="border:none;" border="0"/></a> </li>
						      
					    	<li><a href="http://www.edufee.com/hrm/symfony/web/index.php/admin/LandingPage"><img src="img/hr_icon.png" alt=""></a></li>
					        <li> <a href="http://www.edufee.com/openbiblio/catalog/home.php"><img src="img/lms_icon.png" alt="" style="border:none;" border="0"/></a> </li>
					           
					      <li><a href="http://www.edufee.com/psp_dashboard/psp"><img src="img/psp_icon.png" alt="" border="0"/>
					      </a></li>
					    </ul>
					</div>
				</div>

			<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Vehicle Details
								</h3>
								<div class="pull-right" style="margin-right: 5px;">
									<ul class="pull-right stats"><li class="lightred">
											<a href="tm-add-vehicle.php">
												<div  style="margin-right: 5px;">

													<h3>Add Vehicle</h3>

												</div>
											</a>
										</li></ul>
								</div>
							</div>
							<div class="box-content nopadding">
								<table class="table table-hover table-nomargin table-bordered">
									<thead>
										<tr>
											<th>Number</th>
											<th>Type</th>
											<th class='hidden-350'>Capacity</th>
											<th class="hidden-480">Condition</th>
											<th class='hidden-1024'>Status</th>
											<th class="hidden-1024">Route</th>
											<th class="hidden-1024">Driver</th>
											<th class="hidden-1024">Conductor</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
									<?php
										require_once "praveenlib.php";
										require_once "datas.php";

										$dbconnection = connectSQL($dbdetails);
										
										if(mysqli_connect_errno()) //Check if any error occurred on connection
								        {
								            echo "db_connection_fail";
								        }
								        else
								        {
								        	$sql="select * from tm_vehicle_details";

								        	$result=mysqli_query($dbconnection,$sql);

								        	while($row=mysqli_fetch_array($result))
											{
												echo '<tr><td>'.$row['number'].'</td><td>'.$row['type'].'</td><td class="hidden-350">'
													.$row['capacity'].'</td><td class="hidden-480">'.$row['vehicle_condition']
													.'</td><td class="hidden-1024">'.$row['vehicle_status'].'</td><td class="hidden-1024">'
													.$row['route'].'</td><td class="hidden-1024">'.$row['driver'].'</td><td class="hidden-1024">'
													.$row['conductor'].'</td><td><button class="edit btn btn-warning" value="'.$row['number']
													.'"><i class="icon-edit"></i>Edit</button><span>&nbsp&nbsp</span><button class="delete btn btn-warning" value="'.$row['number']
													.'"><i class="icon-trash"></i>Delete</button></td></tr>';
											}
								        }
									?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>

<script>
	$(".edit").click(function () {
		id=this.value;
		window.location.href="tm-edit-vehicle.php?id="+id;
	});
	$(".delete").click(function () {
		number=this.value;
		var ans=confirm("Are you sure to delete route "+number);
		if(ans)
		{
			var saveButton=$(this);
			saveButton.attr("disabled",true);
			$.post("tm-delete-vehicle.php",{

				number:number
			},function(data,status){


				alert(data);
				if (data === 'success')
					window.location.reload();
				else alert(data);
				saveButton.attr('disabled',false);

			});


		}
	});
</script>
</html>

