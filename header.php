<?php ?>
<!doctype html>
<html lang="en">


<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>MotorCycle Tour</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Fav and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="images/motocycle-tour/172x60.png">

	<!-- CSS Plugins -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">
	<link href="css/home.css" rel="stylesheet">
	
	<!-- CSS Font Icons -->
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

	<!-- CSS Custom -->
	<link href="css/style.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link href="css/gallery.css" rel="stylesheet">
        <link href="css/blog.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
</head>

<body>
	
	<div id="introLoader" class="introLoading"></div>
	
	<!-- BEGIN # MODAL LOGIN -->
<!--	<div class="modal fade modal-login modal-border-transparent" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<button type="button" class="btn btn-close close" data-dismiss="modal" aria-label="Close">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</button>
				
				<div class="clear"></div>
				
				 Begin # DIV Form 
				<div id="modal-login-form-wrapper">
					
					 Begin # Login Form 
					<form id="login-form">
					
						<div class="modal-body pb-5">
					
							<h4 class="text-center heading mt-10 mb-20">Sign-in</h4>
						
							<button class="btn btn-facebook btn-block">Sign-in with Facebook</button>
							
							<div class="modal-seperator">
								<span>or</span>
							</div>
							
							<div class="form-group"> 
								<input id="login_username" class="form-control" placeholder="username" type="text"> 
							</div>
							<div class="form-group"> 
								<input id="login_password" class="form-control" placeholder="password" type="password"> 
							</div>
			
							<div class="form-group">
								<div class="row gap-5">
									<div class="col-xs-6 col-sm-6 col-md-6">
										<div class="checkbox-block fa-checkbox"> 
											<input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox" value="First Choice" type="checkbox"> 
											<label class="" for="remember_me_checkbox">remember</label>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 text-right"> 
										<button id="login_lost_btn" type="button" class="btn btn-link">forgot pass?</button>
									</div>
								</div>
							</div>
						
						</div>
						
						<div class="modal-footer">
						
							<div class="row gap-10">
								<div class="col-xs-6 col-sm-6 mb-10">
									<button type="submit" class="btn btn-primary btn-block">Sign-in</button>
								</div>
								<div class="col-xs-6 col-sm-6 mb-10">
									<button type="submit" class="btn btn-primary btn-block btn-inverse" data-dismiss="modal" aria-label="Close">Cancel</button>
								</div>
							</div>
							<div class="text-left">
								No account? 
								<button id="login_register_btn" type="button" class="btn btn-link">Register</button>
							</div>
							
						</div>
					</form>
					 End # Login Form 
								
					 Begin | Lost Password Form 
					<form id="lost-form" style="display:none;">
						<div class="modal-body pb-5">
						
							<h3 class="text-center heading mt-10 mb-20">Forgot password</h3>
							<div class="form-group mb-10"> 
								<input id="lost_email" class="form-control" type="text" placeholder="Enter Your Email">
							</div>
							
							<div class="text-center">
								<button id="lost_login_btn" type="button" class="btn btn-link">Sign-in</button> or 
								<button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
							</div>
							
						</div>
						
						<div class="modal-footer mt-10">
							
							<div class="row gap-10">
								<div class="col-xs-6 col-sm-6">
									<button type="submit" class="btn btn-primary btn-block">Submit</button>
								</div>
								<div class="col-xs-6 col-sm-6">
									<button type="submit" class="btn btn-primary btn-inverse btn-block" data-dismiss="modal" aria-label="Close">Cancel</button>
								</div>
							</div>
							
						</div>
						
					</form>
					 End | Lost Password Form 
								
					 Begin | Register Form 
					<form id="register-form" style="display:none;">
					
						<div class="modal-body pb-5">
						
							<h3 class="text-center heading mt-10 mb-20">Register</h3>
							
							<button class="btn btn-facebook btn-block">Register with Facebook</button>
							
							<div class="modal-seperator">
								<span>or</span>
							</div>
							
							<div class="form-group"> 
								<input id="register_username" class="form-control" type="text" placeholder="Username"> 
							</div>
							
							<div class="form-group"> 
								<input id="register_email" class="form-control" type="email" placeholder="Email">
							</div>
							
							<div class="form-group"> 
								<input id="register_password" class="form-control" type="password" placeholder="Password">
							</div>
							
							<div class="form-group"> 
								<input id="register_password_confirm" class="form-control" type="password" placeholder="Confirm Password">
							</div>

						</div>
							
						<div class="modal-footer mt-10">
						
							<div class="row gap-10">
								<div class="col-xs-6 col-sm-6 mb-10">
									<button type="submit" class="btn btn-primary btn-block">Register</button>
								</div>
								<div class="col-xs-6 col-sm-6 mb-10">
									<button type="submit" class="btn btn-primary btn-inverse btn-block" data-dismiss="modal" aria-label="Close">Cancel</button>
								</div>
							</div>
							
							<div class="text-left">
									Already have account? <button id="register_login_btn" type="button" class="btn btn-link">Sign-in</button>
							</div>
							
						</div>
							
					</form>
					 End | Register Form 
								
				</div>
				 End # DIV Form 
								
			</div>
		</div>
	</div>-->
	<!-- END # MODAL LOGIN -->
	
	<!-- start Container Wrapper -->
	<div class="container-wrapper">

		<!-- start Header -->
		<header id="header">
	  
			<!-- start Navbar (Header) -->
			<nav class="navbar navbar-primary navbar-fixed-top navbar-sticky-function">

				<div class="navbar-top">
				
					<div class="container">
						
						<div class="flex-row flex-align-middle">
							<div class="flex-shrink flex-columns">
								<a class="navbar-logo" href="index-2.html">
                                                                    <img src="images/globetrot-logo.png" alt="Logo" />
								</a>
							</div>
							<div class="flex-columns">
								<div class="pull-right">
								
									<div class="navbar-mini">
										<ul class="clearfix">
										
<!--											<li class="dropdown bt-dropdown-click hidden-xs">
												<a id="language-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="ion-social-usd hidden-xss"></i> Dollar
													<span class="caret"></span>
												</a>
												<ul class="dropdown-menu" aria-labelledby="language-dropdown">
													<li><a href="#"><i class="ion-social-usd"></i> Dollar</a></li>
													<li><a href="#"><i class="ion-social-euro"></i> Europe</a></li>
													<li><a href="#"><i class="ion-social-yen"></i> Yen</a></li>
												</ul>
											</li>-->
											
											<li class="dropdown bt-dropdown-click hidden-xs">
												<a id="currncy-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="ion-android-globe hidden-xss"></i> English
													<span class="caret"></span>
												</a>
												<ul class="dropdown-menu" aria-labelledby="language-dropdown">
													<li><a href="#">English</a></li>
													<li><a href="#">France</a></li>
													<li><a href="#">Japanese</a></li>
												</ul>
											</li>
											
											<li class="dropdown bt-dropdown-click visible-xs">
												<a id="currncy-language-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-cog"></i>
												</a>
												<ul class="dropdown-menu" aria-labelledby="language-dropdown">
													<li><a href="#"><i class="ion-social-usd"></i> sample</a></li>
													<li><a href="#"><i class="ion-social-euro"></i> sample</a></li>
													<li><a href="#"><i class="ion-social-yen"></i> sample</a></li>
													<li class="divider"></li>
													<li><a href="#">English</a></li>
													<li><a href="#">France</a></li>
													<li><a href="#">Japanese</a></li>
												</ul>
											</li>
											
<!--											<li class="user-action">
												<a data-toggle="modal" href="#loginModal" class="btn">Sign up/in</a>
											</li>-->

										</ul>
									</div>
						
								</div>
							</div>
						</div>

					</div>
					
				</div>
				
				<div class="navbar-bottom hidden-sm hidden-xs">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-9">
								
								<div id="navbar" class="collapse navbar-collapse navbar-arrow">
									<ul class="nav navbar-nav" id="responsive-menu">
                                                                            <li><a href="index.php">Home</a>
										</li>
                                                                                <li><a href="tour-package.php">Tour Package</a>
										</li>
                                                                                <li><a href="aboutus.php">About Us</a></li>
                                                                                <li><a href="blog.php">Blog</a>
										</li>
                                                                                <li><a href="gallery.php">Gallery</a>
										</li>
                                                                                <li><a href="contactus.php">Contact us</a></li>
									</ul>
								</div><!--/.nav-collapse -->
								
							</div>
							
							<div class="col-sm-3">
							
								<div class="navbar-phone"><i class="fa fa-phone"></i> Call us: +66 66 666 6666</div>
							
							</div>

						</div>
						
					</div>
				
				</div>

				<div id="slicknav-mobile"></div>
				
			</nav>
			<!-- end Navbar (Header) -->

		</header>
		<div class="clear"></div>
		
