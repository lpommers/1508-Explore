<?php

include("dbconnect.php");
$out="";

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
	$out.= "<h2>$postcategory:</h2>";
	$out.= "<h1><a href='event.php?id=$id'>$posttitle - </a><span>$postdate $posttime</span></h1>";
		if (!empty($postvideo)){
			$out.="<iframe src='$postvideo' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
			}
	$out.="<p class='header'>$postheader</p>";
		if (empty($postvideo)) {
			$out.= "<div class='sign_up'><a href='#'>Sign Up</a>";
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
	$out.="<div id='allposts'>";


	$data=mysql_fetch_assoc($result);
	$id = $data['ID'];
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

function all_people($specific){
	$postinfo = "SELECT * FROM people $specific";
	$result = mysql_query($postinfo);

	$out = " ";
	$out.=" <div id='allposts'>";

	while($data=mysql_fetch_assoc($result)){
	$name = $data['name'];
	$position = $data['position'];
	$blurb_text = $data['first text'];

	$out.="<h2 class = 'category'>People</h2>
		<div class='person_wrapper'>
			<div class='person_text'>
				<h1 class='person_name'>$name</h1>
				<h2 class='person_position'>$position</h2>
				<h3 class='person_blurb'>$blurb_text</h3>
			</div>
		</div>";
	}
	return $out;
}

?>
