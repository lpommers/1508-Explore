<?php

include("dbconnect.php");
$out="";

//for grabbing post title

function event_post($specific){

	$postinfo= "SELECT * FROM $specific";
	$result = mysql_query($postinfo);

	$out=" ";
	$out.="<div id='allposts'>";


	$data=mysql_fetch_assoc($result))
	$id = $data['id'];
	$postcategory = $data['category'];
	$posttitle = $data['title'];
	$postdate = $data['date'];
	$posttime = $data['time'];
	$postheader = $data['headertext'];
	$posttext = $data['text'];
	$postvideo = $data['videolink'];
	$out.= "<div class='individualpost'>";
	$out.= "<h1>$postcategory:</h1>";
	$out.= "<h2>$posttitle - <span>$postdate $posttime</span></h2>";
		if (!empty($postvideo)){
			$out.="<iframe src='$postvideo' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
			}
	$out.="<p class='header'>$postheader</p>";
		if (empty($postvideo)) {
			$out.= "<div><a>Sign Up</a>";
		}

	$out.= "</div>";

	$out.="</div>";

	return $out;

	}

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
		<a href="#"><img id='logo'src="img/logo.png" alt="1508 logo"></a>

		<nav class='header_nav'>
			<div class='header_about_links'>
				<a id = 'about_us_link' href="#">about</a>
				<a href="http://1508.dk">1508.dk</a>
			</div>

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
		</nav>
	</header>
	<div class="filter_wrapper">
		<ul class="filter_nav">
			<li>
				<a href="index.php"><img src="img/nav-icons/house.png" alt="home"></a>
			</li>
			<li>
				<a href="#"><img src="img/nav-icons/cal.png" alt="cal"></a>
			</li>
			<li>
				<a href="knowledge.php"><img src="img/nav-icons/light.png" alt="knowledge"></a>
			</li>
			<li>
				<a href="#"><img src="img/nav-icons/people.png" alt="speakers"></a>
			</li>
			<li>
				<a href="#"><img src="img/nav-icons/search.png" alt="search"></a>
			</li>
		</ul>
	</div>


</body>
</html>
