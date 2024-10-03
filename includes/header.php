<?php
	header('Access-Control-Allow-Origin: *');
	// The following code runs the map.scss and compiles the scss files into the main file.
	use ScssPhp\ScssPhp\Compiler;
	require 'vendors/scssphp-master/scss.inc.php';

	$scss = new Compiler();
	$scss->setFormatter('ScssPhp\ScssPhp\Formatter\Crunched');

	// To stop generating css, comment out the next line.
	file_put_contents('css/style.min.css', $scss->compile('@import "css/scss/map.scss";'));
?>


<!DOCTYPE html>
<html class="no-js" lang="en_AU" />
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Mcarthur</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />

	<meta name="HandheldFriendly" content="True" />
	<meta name="pinterest" content="nopin" />

	<meta property="og:locale" content="en_AU" />
	<meta property="og:type" content="website" />
	<meta property="fb:admins" content="" />
	<meta property="fb:app_id" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta property="og:image:width" content="" />
	<meta property="og:image:height" content="" />
	<meta property="og:image:alt" content="" />

	<meta name="twitter:title" content="" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:image:alt" content="" />
	<meta name="twitter:card" content="summary_large_image" />
	
	
    <link rel="stylesheet" type="text/css" href="css/style.min.css?v=<?php echo rand(1,100); ?>" />

	<!-- Fav Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="#" />
</head>
<body data-instant-intensity="mousedown">
<section class="section-1 d-flex flex-column align-items-center">
		<div class="container d-flex align-items-center justify-content-between">
			<nav class="navbar navbar-expand-xl bg-white">
			
				<a href="index.php" title="Sliver Drains">
					<img class="lazy" data-src="images/logo.jpg" alt="Logo" height="" width="" />
				</a>

			

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-menu"></span>
				</button>	

				<div class="collapse text-uppercase justify-content-center navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto mt-4 mt-xl-0">
						<li>
							<a href="index.php" title="Home">Home</a>
						</li>	
						<li>
							<a href="index.php" title="About Us">About Us</a>
						</li>	
						<li>
							<a href="index.php" title="Services">Services</a>
						</li>	
						<li>
							<a href="index.php" title="Reviews">Reviews</a>
						</li>						
						
						<li>
							<a href="blocked-shower-drains.php" title="Faqs">Faqs</a>
						</li>
					
						<li>
							<a href="contact-us.php" title="Contact">Contact Us</a>
						</li>									
					</ul>	
				</div>
				
				<div class="buttons">					
					<div class="booking-primary">
						<div class="me-3"> 
							<a href="#" class="btn btn-primary water-drop" title="Book Online">
								Book Now
							</a>
						</div>
						<div>
							<a href="#" class="btn btn-secondary phone-no" title="54928477">
								54928477
							</a>
						</div>
					</div>
					<!-- <div class="booking-icon">
						<div class="me-3"> 
							<a href="#" class="btn btn-outline-primary" title="1300 000 000">
								<i class="icon-phone"></i>
							</a>
						</div>
						<div>
							<a href="#" class="btn btn-primary" title="Book Online">
								<i class="icon-cursor"></i>
							</a>
						</div>
					</div> -->
				</div>			
			</nav>
		</div>		
</section>