<?php

include("dbconnect.php");
$out="";
$script="";

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
			$out.="<iframe src='$postvideo' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
			}
	$out.="<p class='header'>$postheader</p>";
		if (($postcategory!='knowledge') && (empty($postvideo))) {
			$out.= "<div class='sign_up'><a href='#'>Sign Up</a></div>";
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
							<input type='text' required = 'required' value='navn...' />
							<input type='text' value='stilling...'/>
							<input type='text' value='firma...'/>
							<input type='text' required = 'required' value='e-mail...' />
							<input type='text' required = 'required' value='telefon...' />
							<a href='#'>sign up</a>
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

?>
