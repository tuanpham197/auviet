<!DOCTYPE html>
<html lang="en">
<head>
  	<title></title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>
<body>
	<div id="site">
		<div id="wrapper">
			<header>
				<!-- top -->
				<div class="top">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-7 col-md-4">
								<div class="mail-phone">
									<ul>
										<li><a href="#"><i class="fas fa-envelope"></i>AUVIET@GMAIL.COM</a></li>
										<li><a href=""><i class="fas fa-phone"></i>+84167 231 412</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-5 col-md-8">
								<div class="contact">
									<ul>
										<li><a href="#fb"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#pr"><i class="fab fa-pinterest-p"></i></a></li>
										<li><a href="#tw"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#vi"><i class="fab fa-vimeo-v"></i></a></li>
										<li><a href="#it"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#gg"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- end top -->
				<!-- logo-menu -->
				<div class="logo-menu">
					<div class="container">
						<div class="row">
							<div class="col-xs-3 col-sm-3 col-md-4">
								<div id="logo">
									<a href="<?php echo home_url(); ?>">
										<img src="<?php echo tuanpham_url(); ?>img/logo.png" alt="">
									</a>								
								</div>
							</div>
							<div class="col-xs-7 col-sm-8 col-md-7">
								<div class="menu">
									<!-- <ul id="menu">
										<li><a href="#">HOME</a></li>
										<li>
											<a href="">ABOUT</a>
											<span><i class="fas fa-sort-down"></i></span>
											<ul class="submenu">
												<li><a href="">Submenu 1</a></li>
												<li><a href="">Submenu 2</a></li>
												<li><a href="">Submenu 3</a></li>
											</ul>
										</li>
										<li><a href="">DESTINATIONS</a></li>
										<li>
											<a href="">GALLERY</a>
											<i class="fas fa-sort-down"></i>
											<ul class="submenu">
												<li><a href="">Submenu 1</a></li>
												<li><a href="">Submenu 2</a></li>
												<li><a href="">Submenu 3</a></li>
											</ul>
										</li>
										<li><a href="">BLOG</a></li>
										<li><a href="">CONTACTS</a></li>
									</ul> -->
									<?php tuanpham_menu('primary-menu'); ?>
								</div>
							</div>
							<div class="col-xs-2 col-sm-1 col-md-1">
								<div class="box">
								  <div class="container-2">						     	
								      <form role="search" id="searchform" action="#" method="get">
								      	<span class="icon"><i class="fa fa-search"></i></span>
										<input value="" id="search" name="s" type="search" placeholder="type to search"/>
									</form>
								  </div>
								</div>
								<a id="icon-menu-responsive" class="fas fa-bars"></a>
							</div>
						</div>
					</div>
				</div> <!-- end logo-menu -->
			</header>