<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	$x = $_GET["x"];
	$y = $_GET["y"];

	echo 'python drive.py ' . $x . ' ' . $y; 
	shell_exec('sudo python drive.py ' . $x . ' ' . $y);

	sleep(10);

	shell_exec('sudo python drive.py 0 0');
?>
