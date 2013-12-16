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
			$out.="<iframe src='$postvideo' width='100%' height='100%' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
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
	$out.= "<div class='individual_post'>";
	$out.= "<h3>$postcategory:</h3>";
	$out.= "<h1>$posttitle</h1>";
	$out.="<h2>$postdate $posttime</h2>";
		if (!empty($postvideo)){
			$out.="<iframe src='$postvideo' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
			}
	$out.="<p class='header'>$postheader</p>";
	$out.="<p>$posttext</p>";

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

?>
