<?php
	require 'db.inc.php';
	if (isset($_POST['city'])) {
	
		$sql="select * from district";
		$result=mysqli_query($connect,$sql);

		echo '<option value="">-----select-----</option>';
		while ($row=mysqli_fetch_assoc($result)) {
			echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
		}
	
	} elseif (isset($_POST['taluk'])) {

		$district_id=$_POST['district_id'];
		$sql="select * from taluk where district_id='$district_id'";
		$result=mysqli_query($connect,$sql);

		echo '<option value="">-----select-----</option>';
		while ($row=mysqli_fetch_assoc($result)) {
			echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
		}
	
	} elseif (isset($_POST['serve'])) {

		$sql="select * from service";
		$result=mysqli_query($connect,$sql);

		echo '<option value="">-----select-----</option>';
		while ($row=mysqli_fetch_assoc($result)) {
			echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
		}
	
	} else {
		header("Location:../registration.html");
		exit();
	}
?>