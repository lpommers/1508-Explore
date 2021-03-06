<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1508 explore</title>
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<script type="text/javascript">
	   $(document).ready(function(){

            // slides the navigation menu on mobile version
            $('#events').click(function(){
               $('#yearsmenu').slideToggle();
            });


            $('#2013').click(function(){
               $('#monthsmenu').slideToggle();
            });


            $('#months').click(function(){
               $('#monthsmenu').slideToggle();
            });


        });
	</script>

</head>
<body>
	<div class="banner">
		<img id="logo" src="img/logo.png" alt="logo">
	</div>
	<div class="menu">
		<nav id="nav">
			<ul>
				<li class="menu_list">all</li>
				<li class="menu_list" id="events"><a href="#" onClick="dropdown()">events</a></li>
				<li class="menu_list">knowledge</li>
				<li><img id="search" src="img/search.png" alt="search"></li>
			</ul>
		</nav>

		<nav id="dropdown">
			<ul>
				<li id="years"><a href="#" onClick="dropdown()">Years</a></li>
				<li id="months"><a href="#" onClick="dropdown()">Months</a></li>
			</ul>
		</nav>

		<nav id="yearsmenu">
			<ul>
				<li id="2013"><a href="#" onClick="yearsmenu()">2013</a></li>
				<li>2012</li>
				<li>2011</li>
				<li>2010</li>
				<li>2009</li>
				<li>2008</li>
				<li>2007</li>
				<li>2006</li>
			</ul>
		</nav>

		<nav id="monthsmenu">
			<ul>
				<li>JAN</li>
				<li>FEB</li>
				<li>MAR</li>
				<li>APR</li>
				<li>MAY</li>
				<li>JUN</li>
				<li>JUL</li>
				<li>AUG</li>
				<li>SEP</li>
				<li>OCT</li>
				<li>NOV</li>
				<li>DEC</li>
			</ul>
		</nav>

	</div>

	<div class='content_post' id='upcoming'>
		<h3>Upcoming Event:</h3>
		<h4>Micro-Interactions</h4>
		<div class="images">
			<img class="photo" src="img/1.jpg" alt="picture">
		</div>
		<h4><a id='sign_up_button' href="sign_up_page">Sign Up</a></h4>
	</div>

	<div class='content_post'>
		<h3>Lorem Ipsum</h3>
		<h4>11 | DEC | 13</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus lectus vitae enim consectetur sagittis. Aenean in mauris augue. Quisque in congue lectus. Donec ullamcorper sodales dolor at ornare. Phasellus non tempus augue. Donec posuere convallis adipiscing. Fusce in elementum dolor, vitae pretium leo</p>
	</div>

	<div class='content_post'>
		<h3>Responsive Web</h3>
		<h4>DEC | 2013</h4>
		<div class="images">
			<img class="photo" src="img/4.jpg" alt="picture">
		</div>
	</div>

	<div class='content_post'>
		<h3>Lorem Ipsum</h3>
		<h4>1 | DEC | 13</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus faucibus lectus vitae enim consectetur sagittis. Aenean in mauris augue. Quisque in congue lectus. Donec ullamcorper sodales dolor at ornare. Phasellus non tempus augue. Donec posuere convallis adipiscing. Fusce in elementum dolor, vitae pretium leo</p>
	</div>

</body>
</html>