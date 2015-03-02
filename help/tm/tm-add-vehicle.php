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
						<h1>Add Vehicle</h1>
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
			</div>
			<div class="container-fluid">
			<div class="box box-bordered box-color">
							<div class="box-title">
								<h3><i class="icon-th-list"></i> New Vehicle</h3>
							</div>
							<div class="box-content nopadding">
								<form name="main-form" action="return false;" method="POST" class='form-horizontal form-bordered'>
									<div class="control-group">
										<label for="vehicle-number" class="control-label">Vehicle Number</label>
										<div class="controls">
											<input type="text" name="vehicle-number" id="textfield" placeholder="Example: TN21AB1234" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="type" class="control-label">Vehicle Type</label>
										<div class="controls">
											<select name="type" id="select" class='input-large'>
												<option value="1">BUS</option>
												<option value="2">MINI BUS</option>
												<option value="3">VAN</option>
												<option value="4">CAR</option>
												
											</select>
										</div>
									</div>
									<div class="control-group">
										<label for="capacity" class="control-label">Capacity</label>
										<div class="controls">
											<input type="text" name="capacity" id="textfield" placeholder="Seat count" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="condition" class="control-label">Condition</label>
										<div class="controls">
											<input type="text" name="condition" id="textfield" placeholder="" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label for="status" class="control-label">Status</label>
										<div class="controls">
											<input type="text" name="status" id="textfield" placeholder="" class="input-xlarge">
										</div>
									</div>

									<!--
									<div class="control-group">
										<label for="password" class="control-label">Password</label>
										<div class="controls">
											<input type="password" name="password" id="password" placeholder="Password input" class="input-xlarge">
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Checkboxes<small>More information here</small></label>
										<div class="controls">
											<label class='checkbox'>
												<input type="checkbox" name="checkbox"> Lorem ipsum eiusmod
											</label>
											<label class='checkbox'>
												<input type="checkbox" name="checkbox"> ipsum eiusmod
											</label>
										</div>
									</div>
									<div class="control-group">
										<label for="textarea" class="control-label">Textarea</label>
										<div class="controls">
											<textarea name="textarea" id="textarea" rows="5" class="input-block-level">Lorem ipsum mollit minim fugiat tempor dolore sit officia ut dolore. </textarea>
										</div>
									</div>
									-->
									<div class="form-actions">
										<button onclick="send();" type="button" class="btn btn-primary">Save</button>
										<a href="tm-manage-vehicles.php">
										<button type="button" class="btn" >Cancel</button>
										</a>

									</div>
								</form>
							</div>
						</div>
			</div>

		</div>
	</div>

</body>
<script>
	function send(){
		var number=document.forms['main-form']['vehicle-number'].value;
		var type=document.forms['main-form']["type"].value;
		var capacity=document.forms['main-form']['capacity'].value;
		var condition=document.forms['main-form']['condition'].value;
		var status=document.forms['main-form']['status'].value;


		$('button').attr('disabled',true);
		$.post("add_vehicle.php",{

			number:number,
			type:type,
			capacity:capacity,
			condition:condition,
			status:status
		},function(data,status){
			$('button').attr('disabled',false);
			if(status==="success"){
				alert(data);
				if(data==="success")document.forms['main-form'].reset();
			}
		})
	}
</script>
</html>

