<?php

	include("postcontent.php");

	if (isset($_GET['page'])){

		switch($_GET['page']){

				case 'events':
					$out.= grab_post("WHERE CATEGORY != 'knowledge'");
					$script.= script("events");
					break;

				case 'knowledge':
					$out.= grab_post("WHERE CATEGORY = 'knowledge'");
					$script.= script("knowledge");
					break;

				case 'people':
					$out.= all_people("");
					$script.= script("people");
					break;
		}
	}

	elseif (isset($_GET['id'])) {

			$post_category=$_GET['category'];
			$post_id=$_GET['id'];

			switch($post_category){

				case 'people':
					$out.= single_speaker("WHERE id = $post_id");
					$script.= script("people");
					break;

				default:
					$out.= single_post("WHERE ID = $post_id");
					if ($post_category=='knowledge'){
						$script.=script("knowledge");
					}

					else{
						$script.=script("events");
						}
		}

	}


	else {

		$out.= grab_post("");
		$script.= script("home");
	}

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

	<!-- search box toggle on click -->
	<script>
		$(function(){
			$('#search').click(function(){
				event.preventDefault();
				$('#search_box').slideToggle();
			});

		<?php echo $script ?>

		});

	</script>
</head>
<body>
		<header>
			<!-- logo -->
			<a href="index.php"><img id='logo'src="img/logo.png" alt="1508 logo"></a>

				<!-- about us and 1508 page lings -->
				<div class='header_about_links'>
					<div><a href="#">about</a></div>
					<div><a href="http://1508.dk">1508.dk</a></div>
				</div>

				<!-- social icons navigation -->
				<ul class='social_icons'>
					<li>
						<a href="http://www.linkedin.com/company/22451?trk=tyah&trkInfo=tas%3A1508%2Cidx%3A1-1-1" target='_blank'><img src="img/social/1508linked.png" alt="linkedin"></a>
					</li>
					<li>
						<a href="https://www.facebook.com/1508dk" target='_blank'><img src="img/social/1508fb.png" alt="facebook"></a>
					</li>
					<li>
						<a href="http://www.slideshare.net/1508as" target='_blank'><img src="img/social/1508slide.png" alt="twitter"></a>
					</li>
					<li>
						<a href="https://twitter.com/1508AS" target='_blank'><img src="img/social/1508tw.png" alt="vimeo"></a>
					</li>
					<li>
						<a href="http://vimeo.com/design1508/videos" target='_blank'><img src="img/social/1508vim.png" alt="vimeo"></a>
					</li>
				</ul>

				<!-- search box -->
				<form id = 'search_box_desktop'>
					<input type="text" value = 'Search...'>

				</form>
			</header>

		<!-- wrapper for main navigation -->
		<div class="filter_wrapper">
			<!-- search box -->
			<form id = 'search_box'>
				<input type="text" value = 'Search...'>

			</form>

			<!-- main navigation -->
			<ul class="filter_nav">
				<li>
					<a href="http://luke0086.keaweb.dk/1508"><img class='home' src="img/nav-icons/house.png" alt="home"></a>
				</li>
				<li>
					<a href="http://luke0086.keaweb.dk/1508?page=events"><img class='events' src="img/nav-icons/cal.png" alt="cal"></a>
				</li>
				<li>
					<a href="http://luke0086.keaweb.dk/1508?page=knowledge"><img class='knowledge' src="img/nav-icons/light.png" alt="knowledge"></a>
				</li>
				<li>
					<a href="http://luke0086.keaweb.dk/1508?page=people"><img class='people' src="img/nav-icons/people.png" alt="speakers"></a>
				</li>
				<li>
					<a id='search' href="#"><img src="img/nav-icons/search.png" alt="search"></a>
				</li>
			</ul>
		</div>

		<div class='content'>

			<!-- wrapper for desktop navigation -->
			<div class="filter_wrapper_desktop">


				<!-- main navigation -->
				<ul class="filter_nav_desktop">
					<li>
						<a href="http://luke0086.keaweb.dk/1508">Home</a>
					</li>
					<li>
						<a href="http://luke0086.keaweb.dk/1508?page=events">Events</a>
					</li>
					<li>
						<a href="http://luke0086.keaweb.dk/1508?page=knowledge">Knowledge</a>
					</li>
					<li>
						<a href="http://luke0086.keaweb.dk/1508?page=people">People</a>
					</li>

				</ul>
			</div>


			<?php echo $out; ?>
		</div>
	</body>
	</html>