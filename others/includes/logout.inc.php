<?php
	
	session_start();
	session_unset();
	session_destroy();

	header("Location:../../welcome/selectionpage.html");
	die();

?>