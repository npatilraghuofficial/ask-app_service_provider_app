<?php
	
	require("db.inc.php");

	if (isset($_POST['email'])) {

		$id=$_SESSION['serve_id'];
		// $id='1';
		
		$email=$_POST['email'];
		$serve_1=$_POST['serve_1'];
		$serve_2=$_POST['serve_2'];
		$name=$_POST['name'];
		$present_address=$_POST['present_address'];
		$permanent_address=$_POST['permanent_address'];
		$district_id=$_POST['district_id'];
		$taluk_id=$_POST['taluk_id'];

		// $sql="insert into service_provider(first_name,middle_name,last_name,email,serve_1,serve_2,present_address,permanent_address,district_id,taluk_id) values('$first_name','$middle_name','$last_name','$email','$serve_1','$serve_2','$present_address','$permanent_address','$district_id','$taluk_id')";
		$sql="update service_provider set name='$name', email='$email', serve_1='$serve_1', serve_2='$serve_2', present_address='$present_address', permanent_address='$permanent_address', district_id='$district_id', taluk_id='$taluk_id' where id='$id'";
		$result=mysqli_query($connect,$sql);

		if ($result) {
			echo "success";
		} else {
			echo "error";
		}
		
	} else {
		header("Location:../registration.html");
		exit();
	}
	

?>