<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
<?php

	$active=array('cc'=>0,'en'=>1,'fr'=>2,'de'=>3,'ru'=>4,'nl'=>5,'cz'=>6,'hr'=>7);
	$linkfield=8;
	$memberfield=9;
	
	if (!isset($active[$_REQUEST['lang']])) {
		$lang = 1;//"en";
	} else {
		$lang = $active[$_REQUEST['lang']];
	}
	
	
	$row = 1;
	if (($handle = fopen("pp-links-prov.csv", "r")) === FALSE) {
		echo "File error";
		die();
	}
	$keys = fgetcsv($handle);
	while (($data = fgetcsv($handle)) !== FALSE) {
		$countries[$data[0]]=array($data[$lang],$data[$linkfield],$data[$memberfield]);
	}
	fclose($handle);
	
	
	array_multisort($countries);
	foreach ($countries as $k=>$n){
		if (isset($_REQUEST['onlymembers']) && ($n[2]!=='yes')){
			continue;
		}
		if ($k==='PP'){
			$n[0]='PPI';
			if (!isset($_REQUEST['showppi'])){
				continue;
			}
		}

		
		//if ($_REQUEST['code']==='wiki'){
						
		//} else {
			if ($n[1]!=='') {
				echo "<a href='".$n[1]."'>";
			}
			if(!isset($_REQUEST['nopic'])) {
				echo "<img src='http://pp.3025-game.de/flags/".strtolower($k).".gif' border='0' />&nbsp;";
			}
			if (($n[2]==='yes') && (isset($_REQUEST['showmembers']))){
				echo "<b>".$n[0]."</b></a><br />";
			} else {
				echo $n[0]."</a><br />";
			}
		//}
	}
	
	
	/*array_multisort($name, $country,$link,$member);
	foreach ($name as $k=>$n){
		echo "<br /><a href='".$link[$k]."'>";
		if($_REQUEST['nopic'] != 1) {
			echo "<img src='http://pp.3025-game.de/flags/".strtolower($country[$k]).".gif' border='0' />&nbsp;";
		}
		if ($member[$k]==='yes'){
			echo $name[$k]."</a>";
		} else {
			echo "<b>".$name[$k]."</b></a>";
		}
	}
	
	
/*
	include("names.php");
	include("list.php");

	/*if($active[$_REQUEST['lang']] != 1) {
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
	}*/
?>
</body>
</html>	
