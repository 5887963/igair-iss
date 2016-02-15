<?php
function sanitize_output($buffer) {
$search = array(
	'/\>[^\S ]+/s',
	'/[^\S ]+\</s',
	'/(\s)+/s'
);
$replace = array(
	'>',
	'<',
	'\\1'
);
$buffer = preg_replace($search, $replace, $buffer);
	return $buffer;
}
ob_start("sanitize_output");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>IGAIR - ARMA 3</title>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</head>
	<body>
		<nav class="red" role="navigation" style="height:96px;">
			<img src="res/logoSmall.png" class="brand-logo center" style="height:96px;"/>
		</nav>
		<br>
		<div class="container">
			<div class="col s12">
				<ul class="tabs">
					<li class="waves-effect waves-light tab col s3"><a class="active" href="#tab1">INTRODUCTION</a></li>
					<li class="waves-effect waves-light tab col s3"><a href="#tab2">MODPACK INFORMATION</a></li>
					<li class="waves-effect waves-light tab col s3 disabled"><a href="#tab3">MEDIA (COMING SOON)</a></li>
				</ul>
			</div>
			<br><br>
			<div id="tab1" class="col s12 center">
				<i class="medium material-icons">language</i>
				<h2>IGAIR - ARMA 3</h2>
				<h5>Anti Zombie-Fish Since 2015</h5>
				<br>
				<div class="col s12 card-panel">
					Welcome to Intergalactic Airlines' Arma 3 page! Home to the enthusiastic members of IGAIR 
					that enjoy playing the Armed Assault series. We strive to provide an immersive and enjoyable 
					experience for all who join us in our sessions. To achieve this we employ many modifications 
					that help refine the overall feel of the game such as 
					<a href="http://ace3mod.com/" target="_blank">ACE3</a> and <a href="https://goo.gl/Ewpsi7" target="_blank">ACRE2</a>;
					check out <font color="red">"Modpack Information"</font> for the entire list. We play to enjoy ourselves and promote
					teamwork during every mission, so all can enjoy the session no matter what skill level.
					<br><br>
					If you're interested in joining us in a session simply download and install the mods, we'll be happy
					to have more players attend!
				</div>
			</div>
			<div id="tab2" class="row center">
				<i class="medium material-icons">cloud_download</i>
				<br><br>
				<div class="col s12 blue white-text">
					<h4><font color='yellow'><b>Current Mods List:</b></font></h4>
					<?php
						$dir = 'C:\xampp\htdocs\a3\mods';
						$scanArray = scandir('C:\xampp\htdocs\a3\mods');
						unset($scanArray[0]);
						unset($scanArray[1]);
						unset($scanArray[2]);
						$implode = implode(', ', $scanArray);
						$trunc = preg_replace('/@/', '', $implode);
						echo($trunc);
						$countArray = count($scanArray);
						echo("<br><br> <font color='yellow'><b>Total Mods: </b></font>");
						echo($countArray);
						$sizeArray = disk_total_space($dir);
						echo("<br><font color='yellow'><b>Total Size: </b></font>");
						$cutStr = substr($sizeArray, 0, 2);
						echo($cutStr);echo("GB");
					?>
					<br><br>
				</div>
				<div class="col s12 yellow">
					<h4><font color='red'><b>Installation:</b></font></h4>
					<ol class="left-align">
						<li>Download and install the <a href="http://www.armaholic.com/page.php?id=22199" target="_blank">Arma3Sync Client</a></li>
						<li>Point the client to your Arma 3 directory</li>
						<li>Create a new directory to contain your mods for IGAIR and add it to your "Addon Search Directories"</li>
						<li>Add a new repository using this import link: <font color="red">http://igair.ddns.net/a3/mods/.a3s/autoconfig</font></li>
						<li>Connect to the repository and use the "exact match" option when checking the mods</li>
						<li>Use the new "join server" entry after downloading</li>
					</ol>
					<br>
				</div>
				<div class="col s6 red">
					<h4><font color='white'><b>YouTube Video:</b></font></h4>
					<div class="video-container">
						<iframe src="//www.youtube.com/embed/nTiINV-3IL8?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>
					<br>
				</div>
			</div>
			<div id="tab3" class="col s12 center">
				<i class="medium material-icons">play_circle_outline</i>
				WHAT YOU LOOKING AT?
			</div>
		</div>
		<div id="modalCookie" class="modal bottom-sheet">
			<div class="modal-content">
				<img src="res/codyCookie.png"/><h4>Cookies ahead!</h4>
				<p>By continuing to use/browse this site you are agreeing to the potential use of cookies.<br><br>
				More information on cookie-use in the EU can be found 
				<a href="http://ec.europa.eu/ipg/basics/legal/cookies/index_en.htm" target="_blank">here</a>.</p>
			</div>
		</div>
		<?php
		if(!isset($_COOKIE['codyCookie'])) {
			echo("<script>$('#modalCookie').openModal();</script>");
			setcookie('codyCookie', 'codyWasHere');
		}
		?>
	</body>
</html>