<!DOCTYPE php PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv=Content-Type content="text/html; charset=utf-8">
		<title>Nutthakit Liewpairat Portfolio 2013</title>
		<link rel="stylesheet" type="text/css" href="plug-in/MyFontsWebfontsKit.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</head>
	<body>
		<div id='main'>
			<div id='home'>
				<h1 onclick="clickMenu(0);">NUTTHAKIT LIEWPAIRAT</h1>
			</div>
			<div id='works'>
				<div id='image'>
					<iframe id='video' width="734" height="335" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> 
				</div>
				<div class='right_side' id='list'>
					<ul>
						<?
							$heads = array();
							$details = array();
							$dates = array();
							$i = 0;
							
							$file_handle = fopen("data", "r");
							while (!feof($file_handle)) {
								$list = fgets($file_handle);
								list($name, $head, $detail, $date, $link) = split("#", $list);
								$link = trim($link);
							   	echo "<li onclick=\"callVideo('$link','$i');\">".$name."</li>";
								$heads[$i] = $head;
								$details[$i] = $detail;
								$dates[$i] = $date;
								$i++;
							}
						?>
					</ul>
				</div>
				<div class='right_side' id='details'>
				<?
					for ($j=0; $j < $i; $j++) { 
						echo "<div id='detail_".$j."'>";
						echo "<h2>".$heads[$j]."</h2>";
						echo "<ul>";
						echo "<li>".$details[$j]."</li>";
						echo "</ul>";
						echo "<h3>".$dates[$j]."</h3>";
						echo "</div>";
					}
				?>
				</div>
				<div class='right_side' id='contact'>
					<h2>Contact</h2>
					<ul>
						<li>Name: Nutthakit Liewpairat (Win)</li>
						<li>email: win.lpr12@gmail.com</li>
						<li>No.:+6681 889 7035</li>
						<li><a target="_blank" href="http://www.facebook.com/win.cd"><img width="20px" src="img/fb_ico.jpg" /></a></li>
					</ul>
				</div>
			</div>
			<script>$('#works').hide();</script>
			<div id='menu'>
				<h1 onclick="clickMenu(-1);">WORK</h1>
				<h1 onclick="clickMenu(-2);">CONTACT</h1>
			</div>
		</div>
		<div id='footer'>
			<textarea></textarea>
			<button title="cancel" onclick="click_f(2);">Cancel</button>
			<button title="save" onclick="click_f(1);">Save</button>
		</div>
		<script>
			randomBG();
			$('#footer').hide();
		</script>
	</body>
</html>