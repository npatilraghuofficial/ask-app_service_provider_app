<?php

	require './db.inc.php';

	if (isset($_POST['latlng'])) {

		// $id=$_SESSION['serve_id'];
		$id="1";
		$lat=$_POST['lat'];
		$lng=$_POST['lng'];
		$last_updated=date("Y-m-d H:i:s");

		$sql="UPDATE service_provider SET lat='$lat',lng='lng',last_updated='$last_updated' WHERE id='$id'";
		$result=mysqli_query($connect,$sql);
		if ($result) {
			echo "done";
		} else {
			echo "error";
		}
		

	} else {
		header("Location:../spdashboard.php");
		die();
	}
	

?>