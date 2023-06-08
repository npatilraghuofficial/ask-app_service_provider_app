<?php
	require './db.inc.php';

	if (isset($_POST['get_sp'])) {
		$a = array('getsp' => "success");
		// $a = array('getsp' => "error");
		$a = json_encode($a);
		echo $a;
	} else {
		header("Location:../dashboard.html");
		die();
	}

?>