<?php
echo '
<head>
	<title>THE CRYPT</title>
	<link rel="shortcut icon" href="favicon.png"/>
	<link rel="stylesheet" type="text/css" href="php.css">
</head>
';

function main() {
	$dir = "";
	$dir = (isset($_GET['dir']) ? $_GET['dir'] : null);
	if ($dir == "") {
		$dir = "./";
	}
	$arr = array();
	$i = 0;
	$olddir = dirname(getcwd());
	chdir($dir);
	echo "<div class='dir'>Current dir: " . getcwd() . "</div><br>";
	if ($olddir != "./") {
		$olddir = "./";
	}
	echo "<a class='link' href ='main.php?dir=" . $olddir . "'>" . 'RETURN' . "</a>";
	if (isset($_GET['dir']) ? $_GET['dir'] : null) {
		$dir = (isset($_GET['dir']) ? $_GET['dir'] : null);
	}
	echo "<hr>";
	foreach (glob("*.mp4", GLOB_BRACE) as $files) {
		array_push($arr, $files);
		$name= preg_replace('/\\.[^.\\s]{3,4}$/', '', $arr[$i]);
		echo "
		<div class='container'>
			<div class='content'>
				<a href='$dir/$arr[$i]' target='blank' alt='$name' title='$name'>
				<img src='$dir/$arr[$i].jpg'>
				$name
				</a>
			</div>
		</div>";
		$i++;
	}
	foreach (glob("*", GLOB_ONLYDIR) as $folders) {
		echo "
		<div class='container'>
			<div class='content'>
				<a href='main.php?dir=" . $dir . "/" . $folders . "'><img src='folder.png' style='width: 85%;'>" . $folders . "</a>
			</div>
		</div>";
		if (isset($_GET['dir']) ? $_GET['dir'] : null) {
			$dir = (isset($_GET['dir']) ? $_GET['dir'] : null);
		}
	}
}

main();
?>
