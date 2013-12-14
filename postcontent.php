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
	$id = $data['id'];
	$postcategory = $data['category'];
	$posttitle = $data['title'];
	$postdate = $data['date'];
	$posttime = $data['time'];
	$postheader = $data['headertext'];
	$posttext = $data['text'];
	$postvideo = $data['videolink'];
	$out.= "<div class='individual_post'>";
	$out.= "<h1>$postcategory:</h1>";
	$out.= "<h2><a href='event.php?id=$id'>$posttitle - </a><span>$postdate $posttime</span></h2>";
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

?>
