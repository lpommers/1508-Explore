<?php

include("dbconnect.php");
$out="";
$script="";
$eventbar="";

//for grabbing post title

function grab_post($specific){

	$postinfo= "SELECT * FROM 1508content $specific";
	$result = mysql_query($postinfo);

	$out=" ";
	$out.="<div id='all_posts'>";

	while($data=mysql_fetch_assoc($result)){
	$id = $data['ID'];
	$postcategory = $data['category'];
	$posttitle = $data['title'];
	$postdate = $data['date'];
	$posttime = $data['time'];
	$postheader = $data['headertext'];
	$posttext = $data['text'];
	$postvideo = $data['videolink'];
	$out.= "<div class='individual_post'>";
	$out.= "<h3>$postcategory:</h3>";
	$out.= "<h1><a href='http://luke0086.keaweb.dk/1508?category=$postcategory&id=$id'>$posttitle</a></h1>";
	$out.="<h2>$postdate $posttime</h2>";
		if (!empty($postvideo)){
			$out.="<div class='video_container'><iframe src='$postvideo' width='100%' height='100%' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>";
			}
	$out.="<p class='header'>$postheader</p>";
		if (($postcategory!='knowledge') && (empty($postvideo))) {
			$out.= "<div class='sign_up'><a href='http://luke0086.keaweb.dk/1508?category=$postcategory&id=$id'>Sign Up</a></div>";
		}

	$out.= "</div>";

	}

	$out.="</div>";

	return $out;

	}

function single_post($specific){

	$postinfo= "SELECT * FROM 1508content $specific";
	$result = mysql_query($postinfo);

	$out=" ";
	$out.="<div id='all_posts'>";


	$data=mysql_fetch_assoc($result);
	$id = $data['ID'];
	$postcategory = $data['category'];
	$posttitle = $data['title'];
	$postdate = $data['date'];
	$posttime = $data['time'];
	$postheader = $data['headertext'];
	$posttext = $data['text'];
	$postvideo = $data['videolink'];
	$postslide = $data['slideshowlink'];
	$out.= "<div class='individual_post'>";
	$out.= "<h3>$postcategory:</h3>";
	$out.= "<h1>$posttitle</h1>";
	$out.="<h2>$postdate $posttime</h2>";
		if (!empty($postvideo)){
			$out.="<div class='video_container'><iframe src='$postvideo' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>";
			}
	$out.="<p class='header'>$postheader</p>";
	$out.="<p>$posttext</p>";
	if (!empty($postslide)){
			$out.="<p>Slideshow:</p>
			<div class='video_container'><iframe src='$postslide' width='100%' height='100%' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>";
			}

		if (($postcategory!='knowledge') && (empty($postvideo))) {
			$out.= "
					<div>
						<form id='sign_up_form'>
							<input type='text' required value='navn...*' onfocus=\"this.value = this.value=='navn...*'?'':this.value;\" onblur=\"this.value = this.value==''?'navn...*':this.value;\"/>
							<input type='text' value='stilling...' onfocus=\"this.value = this.value=='stilling...'?'':this.value;\" onblur=\"this.value = this.value==''?'stilling...':this.value;\"/>
							<input type='text' value='firma...' onfocus=\"this.value = this.value=='firma...'?'':this.value;\" onblur=\"this.value = this.value==''?'firma...':this.value;\"/>
							<input type='text' required value='e-mail...*' onfocus=\"this.value = this.value=='e-mail...*'?'':this.value;\" onblur=\"this.value = this.value==''?'e-mail...*':this.value;\"/>
							<input type='text' required value='telefon...*' onfocus=\"this.value = this.value=='telefon...*'?'':this.value;\" onblur=\"this.value = this.value==''?'telefon...*':this.value;\"/>
							<div class='sign_up'><a href='#'>Sign Up</a></div>
						</form>
						</div>";
		}

	$out.= "</div>";

	$out.="</div>";

	return $out;

	}

function all_people($specific){
	$postinfo = "SELECT * FROM people $specific";
	$result = mysql_query($postinfo);

	$out = " ";
	$out.="<div id='all_posts'>";

	while($data=mysql_fetch_assoc($result)){
	$id = $data['id'];
	$name = $data['name'];
	$position = $data['position'];
	$blurb_text = $data['first text'];
	$firstimage = $data['first image'];

	$out.="<div class='person_wrapper'>
			<div class='person_text'>
				<h1><a class='person_name' href='http://luke0086.keaweb.dk/1508?category=people&id=$id'>$name</a></h1>
				<h2 class='person_position'>$position</h2>
			</div>
			<a href='http://luke0086.keaweb.dk/1508?category=people&id=$id'><img src='http://luke0086.keaweb.dk/1508/img/people/$firstimage' alt='$firstimage'></a>
	</div>";
	}

	return $out;
}

function single_speaker($specific){
	$postinfo = "SELECT * FROM people $specific";
	$result = mysql_query($postinfo);

	$out = " ";
	$out.="<div id='singlespeaker'>";

	while($data=mysql_fetch_assoc($result)){
	$id = $data['id'];
	$image = $data['image'];
	$name = $data['name'];
	$position = $data['position'];
	$blurb_text = $data['first text'];
	$text = $data['text'];
	$mobile = $data['mobil'];
	$email = $data['email'];
	$linkedin = $data['linkedin'];

	$out.="<img src='http://luke0086.keaweb.dk/1508/img/people/$image' alt='$image'>
			<div class='speaker_wrapper'>
			<h1><a class='person_name' href='http://luke0086.keaweb.dk/1508?category=people&id=$id'>$name</a></h1>
			<h2 class='person_position'>$position</h2>
			<h3>$blurb_text</h3>
			<p>$text</p>
			</div>
			<div class='contact_details'>
			<p>Kontakt</p>
			<ul>
			<li>$mobile</li>
			<li><a href='mailto:$email'>$email</a></li>
			<li><a href='http://www.linkedin.com/profile/$linkedin'>Linkedin</a></li>
			</ul>
			</div>";
	}

	return $out;
}

function script($page){

	$script= "$('img.$page').attr('src','img/nav-icons/o$page.png');";

	return $script;

}

function event_bar(){
	$eventbar="";
	$eventbar.= "<div id='month_bar_wrapper'>
					<table id='month_bar'>
						<tr class='year'><td><p><a href='#'> &nbsp;2007</a></p></td></tr>
						<tr class='year'><td><p><a href='#'> /&nbsp;2008</a></p></td></tr>
						<tr class='year'><td><p><a href='#'> /&nbsp;2009</a></p></td></tr>
						<tr class='year'><td><p><a href='#'> /&nbsp;2010</a></p></td></tr>
						<tr class='year'><td><p><a href='#'> /&nbsp;2011</a></p></td></tr>
						<tr class='year'><td><p><a href='#'> /&nbsp;2012</a></p></td></tr>
						<tr class='year'><td><p><a href='#'> /&nbsp;2013</a></p></td></tr>
						<tr class='year'><td><p><a href='#'> /&nbsp;2014</a></p></td></tr>
					</table>
				</div>";
	return $eventbar;
}

function about_us(){
	$out="";
	$out.="<div id='all_posts'>
			<div class='individual_post'>
			<h1>DESIGN IN LOVE WITH TECHNOLOGY</h1>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
			</div>
			</div>";

	return $out;

	}	

?>
