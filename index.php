<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1508 explore</title>
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
						<li class="menu_list">All</li>
						<li class="menu_list" id="events"><a href="#" onClick="dropdown()">Events</a></li>
						<li class="menu_list">Knowledge</li>
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
				<li>January</li>
				<li>February</li>	
				<li>March</li>
				<li>April</li>
				<li>May</li>
				<li>June</li>
				<li>July</li>
				<li>August</li>
				<li>September</li>
				<li>October</li>
				<li>Novermber</li>
				<li>December</li>
			</ul>
		</nav>

	</div>
	<div class="images">
		<img class="photo" src="img/1.jpg" alt="picture">
		<img class="photo" src="img/4.jpg" alt="picture">
		<img class="photo" src="img/8.jpg" alt="picture">
	</div>
</body>
</html>