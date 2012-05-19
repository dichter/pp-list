<?php

	include("names.php");
	include("list.php");

	if($active[$_REQUEST['lang']] != 1) {
		$_REQUEST['lang'] = "en";
	}

	#header("Content-type: text/html");

	asort($$_REQUEST['lang']);

	foreach($$_REQUEST['lang'] as $key=>$elem) {
		if($key != $_REQUEST['origin'] && $PP[$key]) {
			echo "<br /><a href='".$PP[$key]."'>";
			if($_REQUEST['nopic'] != 1) {
				echo "<img src='http://pp.3025-game.de/flags/".strtolower($key).".gif' border='0' />&nbsp;";
			}
			echo $elem."</a>";
		}
	}
?>