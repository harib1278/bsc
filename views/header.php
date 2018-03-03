<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css"/>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
	<?php
	if(isset($this->js)){
		foreach($this->js as $js){
			?><script type="text/javascript" src="<?php echo URL.'views/'.$js; ?>"></script><?php
		}
	}
	?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="DIGITAL COIN Cryptocurrency Market and Trading Site Template">
    <meta name="author" content="Ansonika">
    <title>DIGITAL COIN | Cryptocurrency Market and Trading Site Template</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo URL; ?>public/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?php echo URL; ?>public/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo URL; ?>public/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo URL; ?>public/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo URL; ?>public/img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="<?php echo URL; ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet">
	<link href="<?php echo URL; ?>public/css/vendors.css" rel="stylesheet">
	<link href="<?php echo URL; ?>public/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link href="<?php echo URL; ?>public/css/custom.css" rel="stylesheet">

    <?php // initlaise the login session ?>
    <?php Session::init(); ?>
</head>
<body>		
	<div id="page">
		
	<header class="header menu_2">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
		<div id="logo">
			<a href="/"><img src="<?php echo URL; ?>public/img/logo.png" width="192" height="42" data-retina="true" alt=""></a>
		</div>
		<ul id="top_menu">
			<li><a href="/login" class="login">Login</a></li>
			<li class="hidden_tablet"><a href="/login" class="btn_1 rounded">Start trading</a></li>
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="#0"></a></span>
					<ul>
						<li><a href="index.html">With Sign up form</a></li>
						<li><a href="index-2.html">With Video Background</a></li>
						<li><a href="index-3.html">With Layer Slider</a></li>
						<li><a href="index-4.html">With Cookie bar (EU law)</a></li>
					</ul>
				</li>
				<li><span><a href="about.html">About</a></span></li>
				<li><span><a href="#0">Services</a></span>
					<ul>
						<li><a href="services.html">Services</a></li>
						<li><a href="service-single.html">Service single</a></li>
						<li><a href="service-single-2.html">Service single 2</a></li>
					</ul>
				</li>
				<li>
					<?php if(Session::get('loggedIn') == true){ ?>
							<span><a href="<?php echo URL; ?>dashboard/logout">Logout</a></span>
					<?php } else { ?>
							<span><a href="<?php echo URL; ?>login">Login</a></span>
					<?php } ?>
				</li>
				<?php if(Session::get('loggedIn') != true){ ?>
							<li><span><a href="register.html">Register</a></span></li>
				<?php } ?>
				<li><span><a href="blog.html">Production Log</a></span></li>				
			</ul>
		</nav>
		<!-- Search Menu 
		<div class="search-overlay-menu">
			<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
			<form id="searchform" method="get">
				<input value="" name="q" type="search" placeholder="Search..." />
				<button type="submit"><i class="icon_search"></i>
				</button>
			</form>
		</div>
		End Search Menu -->
	</header>
	<!-- /header -->
	