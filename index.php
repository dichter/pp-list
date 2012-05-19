<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title> Pirate Party - International </title>
	</head>

	<body>
		<b>International Banner (468x60 px)</b><br>
		This banner changes itself to fit the users country. eg.: a german user will get a german banner, a russian user a russian one. The banner link will always point at the PP website fitting the same terms.<p>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp.php?mod=img' width='468px' height='60px' border='0'></a><p>
		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp.php?mod=img' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<hr>
		<b>Country specific Banner (468x60 px)</b><br>
		These banners use a fixed language of the banner. The link, though, points at the PP site of the user's country.<p>

		
		<b>international:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/PP.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/PP.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/PP.gif[/img][/url]<p>

		<?php
			include("names.php");
			include("list.php");

			foreach($PP as $key=>$elem) {
				if($key != "PP") {
				echo "<b>".$en[$key].":</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/".$key.".gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/".$key.".gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/".$key.".gif[/img][/url]<p>";
				}
			}
		?>
		<!-- <b>Austria:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/AT.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/AT.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/AT.gif[/img][/url]<p>


		<b>Australia:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/AU.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/AU.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/AU.gif[/img][/url]<p>


		<b>Belgium:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/BE.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/BE.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/BE.gif[/img][/url]<p>


		<b>Brazil:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/BR.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/BR.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/BR.gif[/img][/url]<p>


		<b>Canada:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/CA.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/CA.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/CA.gif[/img][/url]<p>



		<b>Switzerland:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/CH.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/CH.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/CH.gif[/img][/url]<p>


		<b>Serbia:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/CS.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/CS.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/CS.gif[/img][/url]<p>



		<b>Germany:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/DE.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/DE.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/DE.gif[/img][/url]<p>


		<b>Spain:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/ES.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/ES.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/ES.gif[/img][/url]<p>


		<b>France:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/FR.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/FR.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/FR.gif[/img][/url]<p>


		<b>United-Kingdom:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/GB.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/GB.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/GB.gif[/img][/url]<p>


		<b>Italy:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/IT.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/IT.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/IT.gif[/img][/url]<p>


		<b>Ireland:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/IE.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/IE.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/IE.gif[/img][/url]<p>


		<b>Netherlands:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/NL.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/NL.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/NL.gif[/img][/url]<p>


		<b>New Zealand:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/NZ.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/NZ.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/NZ.gif[/img][/url]<p>



		<b>Peru:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/PE.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/PE.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/PE.gif[/img][/url]<p>



		<b>Poland:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/PL.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/PL.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/PL.gif[/img][/url]<p>



		<b>Romania:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/RO.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/RO.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/RO.gif[/img][/url]<p>



		<b>Russia:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/RU.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/RU.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/RU.gif[/img][/url]<p>


		<b>Sweden:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/SE.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/SE.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/SE.gif[/img][/url]<p>


		<b>USA:</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/US.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/US.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/US.gif[/img][/url]<p>


		<b>South Africa</b><br>
		<a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'><img src='http://pp.3025-game.de/pp/ZA.gif' width='468px' height='60px' border='0'></a><p>

		<i>HTML code:</i><br>
		&lt;a href='http://pp.3025-game.de/pp.php?mod=uri' target='_blank'&gt;&lt;img src='http://pp.3025-game.de/pp/ZA.gif' width='468px' height='60px' border='0'&gt;&lt;/a&gt;<p>

		<i>BB code:</i><br>
		[url=http://pp.3025-game.de/pp.php?mod=uri][img]http://pp.3025-game.de/pp/ZA.gif[/img][/url]<p> -->
	</body>
</html>