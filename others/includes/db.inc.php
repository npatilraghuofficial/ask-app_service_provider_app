<?php
	
	session_start();
	date_default_timezone_set("Asia/Kolkata");
	$connect=mysqli_connect("localhost","root","","app");
	if (!$connect) {
		echo "error connecting the DB";
	}

	function pr($arr) {
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
	}

	function prx($arr) {
		echo "<pre>";
		print_r($arr);
		die();
	}

?>