<?php
	
	require("db.inc.php");

	if (isset($_POST['serve_id'])) {
		// echo "success";
		// die();
		if (isset($_SESSION['serve_id'])) {
			echo "success";
		} else {
			echo "error";
		}
		die();
	}

	if (isset($_POST['submit'])) {


		$id=$_SESSION['serve_id'];
		// $id='1';
		
		$id_proof_type=$_POST['id_proof_type'];
		$address_proof_type=$_POST['address_proof_type'];
		$work_proof_type=$_POST['work_proof_type'];
		
		$profile=$_FILES['profile_pic']['name'];
		$image=uniqid().'_'.$profile;

		$idproof=$_FILES['idproof']['name'];
		$image2=uniqid().'_'.$idproof;

		$addressproof=$_FILES['addressproof']['name'];
		$image3=uniqid().'_'.$addressproof;

		$work_proof=$_FILES['work_proof']['name'];
		$image4=uniqid().'_'.$work_proof;

		$sql="insert into servicer_kyc(servicer_id,profile_img,id_proof_type,id_proof,address_proof_type,address_proof,work_proof_type,work_proof) values('$id','$image','$id_proof_type','$image2','$address_proof_type','$image3','$work_proof_type','$image4')";
		$result=mysqli_query($connect,$sql);
		
		if ($result) {

			move_uploaded_file($_FILES['profile_pic']['tmp_name'], "../images/profile/".$image);
	
			move_uploaded_file($_FILES['idproof']['tmp_name'], "../images/idproof/".$image2);
	
			move_uploaded_file($_FILES['addressproof']['tmp_name'], "../images/addressproof/".$image3);

			move_uploaded_file($_FILES['work_proof']['tmp_name'], "../images/workproof/".$image4);

			header("Location:../kycform.html?submit=success");
			exit();
			
		} else {
			header("Location:../kycform.html?submit=failed");
			exit();
		}

	} else {
		header("Location:../kycform.html");
		exit();
	}
	

?>