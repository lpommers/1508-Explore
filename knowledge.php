<?php
$out = "";



if(isset($error_msg))
{ 
	foreach ($error_msg as  $value) {
		$out .=$value."<br />";
	}
}
// $out .= " Subscribe for our newsletter " ;
$out .= "<form method='post' action='gallery.php' enctype='multipart/form-data'>";
$out .= "<input type='text' name='title' value=\"E-mail\">";
// $out .= "<input type='file' name='image'>";
$out .= "<input type=\"submit\" name=\"submit\" value=\"Subscribe for our newsletter\">";
$out .= "</form>";


?>



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
						<li class="menu_list" id="events"><a href="index.php" onClick="dropdown()">All<a></li>
						<li class="menu_list" id="events"><a href="index.php" onClick="dropdown()">Events</a></li>
						<li class="menu_list" id="knowledge"> <a href="knowledge.php">Knowledge</li>
						<li><img id="search" src="img/search.png" alt="search"></li>	
					</ul>
			
			</nav>

		<div id="subscribe">
			<?php
				echo $out;
			?>
		</div>

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
	<div class="blog">
		<h2> Blog 1 </h2>
		<h4> 3 dec 2013 </h4>
				<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
	</div>

	<div class="blog">
		<h2> Blog 2 </h2>
		<h4> 8 nov 2013 </h4>
				<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
	</div>

	<div class="blog">
		<h2> Blog 3 </h2>
			<h4> 14 sep 2013 </h4>
				<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
	</div>



	




</body>

</html>