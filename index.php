<?php
	include("postcontent.php");
?>

<!doctype html>
<html lang="en">
<head>

	<title>1508 explore</title>
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400' rel='stylesheet' type='text/css'>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
		<header>
		<a href="#"><img id='logo'src="img/logo.png" alt="1508 logo"></a>
			<div class='header_about_links'>
				<p><a id = 'about_us_link' href="#">about</a></p> 
				<p><a href="http://1508.dk">1508.dk</a></p>
			</div>
			</header>

			<ul class='social_icons'>
				<li>
					<a href="#"><img src="img/social/1508linked.png" alt="linkedin"></a>
				</li>
				<li>
					<a href="#"><img src="img/social/1508fb.png" alt="facebook"></a>
				</li>
				<li>
					<a href="#"><img src="img/social/1508slide.png" alt="twitter"></a>
				</li>
				<li>
					<a href="#"><img src="img/social/1508tw.png" alt="vimeo"></a>
				</li>
				<li>
					<a href="#"><img src="img/social/1508vim.png" alt="vimeo"></a>
				</li>
			</ul>

	<div class="filter_wrapper">
	<ul class="filter_nav">
		<li>
			<a href="#"><img src="img/nav-icons/house.png" alt="home"></a>
		</li>
		<li>
			<a href="upcoming.php"><img src="img/nav-icons/cal.png" alt="cal"></a>
		</li>
		<li>
			<a href="#"><img src="img/nav-icons/light.png" alt="knowledge"></a>
		</li>
		<li>
			<a href="#"><img src="img/nav-icons/people.png" alt="speakers"></a>
		</li>
		<li>
			<a href="#"><img src="img/nav-icons/search.png" alt="search"></a>
		</li>
	</ul>
	</div>

	<?php echo grab_post(""); ?>
</body>
</html>