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
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
	<header>
		<a href="index.php"><img id='logo'src="img/logo.png" alt="1508 logo"></a>

		<nav class='header_nav'>
			<div class='header_about_links'>
				<a id = 'about_us_link' href="#">about</a>
				<a href="http://1508.dk">1508.dk</a>
			</div>

			<ul class='social_icons'>
				<li>
					<a href="http://www.linkedin.com/company/22451?trk=tyah&trkInfo=tas%3A1508%2Cidx%3A1-1-1"><img src="img/social/1508linked.png" alt="linkedin"></a>
				</li>
				<li>
					<a href="https://www.facebook.com/1508dk"><img src="img/social/1508fb.png" alt="facebook"></a>
				</li>
				<li>
					<a href="http://www.slideshare.net/1508as"><img src="img/social/1508slide.png" alt="twitter"></a>
				</li>
				<li>
					<a href="https://twitter.com/1508AS"><img src="img/social/1508tw.png" alt="vimeo"></a>
				</li>
				<li>
					<a href="http://vimeo.com/design1508/videos"><img src="img/social/1508vim.png" alt="vimeo"></a>
				</li>
			</ul>
		</nav>
	</header>
	<div class="filter_wrapper">
		<ul class="filter_nav">
			<li>
				<a href="index.php"><img src="img/nav-icons/house.png" alt="home"></a>
			</li>
			<li>
				<a href="events.php"><img src="img/nav-icons/cal.png" alt="cal"></a>
			</li>
			<li>
				<a href="knowledge.php"><img src="img/nav-icons/light.png" alt="knowledge"></a>
			</li>
			<li>
				<a href="people.php"><img src="img/nav-icons/people.png" alt="speakers"></a>
			</li>
			<li>
				<a href="#"><img src="img/nav-icons/search.png" alt="search"></a>
			</li>
		</ul>
	</div>

	<?php echo grab_post("WHERE CATEGORY = 'Upcoming Event'"); ?>
</body>
</html>