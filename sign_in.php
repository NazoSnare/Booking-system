<!DOCTYPE html>
<html lang="en">
	<head>
		<title>LOGIN</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/TMForm.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	</head>
	<body class="" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li><a href="index.php">Home</a></li>
									<li><a href="index-1.html">About</a></li>
									<li><a href="index-2.html">Cars</a></li>
							
									<li class="current"><a href="#">Admin Login</a></li>
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="container_12">
					<div class="grid_12">
						<h1>
							<a href="index.html">
								<img src="images/logo.png" alt="Your Happy Family">
							</a>
						</h1>
					</div>
				</div>
				<div class="clear"></div>
			</header>
<!--==============================Content=================================-->
			
	<div class="container">

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Sign in to your account</h3>
							<hr>
							
							<form action="sign_in_succ.php" method="post">
								<div class="top-margin">
									<label>Username <span class="text-danger">*</span></label>
									<input name="username" type="text" class="form-control">
								</div>
								<div class="top-margin">
									<label>Password <span class="text-danger">*</span></label>
									<input name="password" type="password" class="form-control">
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<input class="btn" name="Signup" type="Submit" value="Sign up">
									</div>
									<div class="col-lg-4 text-right">
										<input class="btn" name="Submit" type="Submit" value="Sign in">
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
<!--==============================footer=================================-->
		
	</body>
</html>