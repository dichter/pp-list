<?php
	$sql = mysql_pconnect("localhost", "ahufler", "kxka29");
	mysql_select_db("ahufler_cms3025",$sql);

	function IPtoCountry($IP) {
		global $sql;

		$IP = IP2Long($IP);
		
		$result = mysql_query("SELECT ip_short FROM ip2country WHERE ip_from <= ".$IP." AND ip_to >= ".$IP." LIMIT 0,1",$sql);

		if(mysql_num_rows($result) == 0) {
			$land = "PP";
		}
		else {
			$row = mysql_fetch_object($result);
			$land = $row->ip_short;
		}

		return $land;
	}

	if(!$_REQUEST['tp']) {
		$_REQUEST['tp'] = "pp";
	}

	include("list.php");

	$country = IPtoCountry($_SERVER['REMOTE_ADDR']);
	$orig = $country;

	if(!file_exists($_REQUEST['tp']."/".$country.".gif") || !$PP[$country]) {
		$country = "PP";
	}

	if($_REQUEST['mod'] == 'uri') {
		#mysql_query("INSERT INTO counter (country,refer,time,origin) VALUES('".$country."','".$_SERVER['HTTP_REFERER']."','".time()."','".$orig."')",$sql);

		echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\"><html><head><title> PP </title></head><body onload='window.location=\"".$PP[$country]."\";'>you are being redirected: <a href='".$PP[$country]."'>".$PP[$country]."</a></body></html>";
	}
	
	if($_REQUEST['mod'] == 'img') {
		#mysql_query("INSERT INTO views (country,refer,time,origin) VALUES('".$country."','".$_SERVER['HTTP_REFERER']."','".time()."','".$orig."')",$sql);

		header("Content-type: image/gif");
		echo file_get_contents($_REQUEST['tp']."/".$country.".gif");
	}

?>