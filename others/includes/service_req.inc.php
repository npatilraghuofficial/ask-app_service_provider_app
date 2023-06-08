<?php
	
	require './db.inc.php';
	if (isset($_POST['submit'])) {

		if ($_POST['submit']=="future") {

			$id=$_SESSION['customer_id'];
			// $id="1";
			$service_id=$_POST['service_id'];
			$service_des=$_POST['service_des'];
			$cdate=$_POST['cdate'];
			$ctime=$_POST['ctime'];
			$status="1";
			$dt=date('Y-m-d');
			$img1=uniqid()."_".$_FILES['img1']['name'];

			$sql="insert into service_request(customer_id,service_id,service_des,cdate,ctime,status,added_on,img1) values('$id','$service_id','$service_des','$cdate','$ctime','$status','$dt','$img1')";
			// echo $sql;
			$result=mysqli_query($connect,$sql);

			$last_id=mysqli_insert_id($connect);
			// echo $last_id;

			if ($result) {
				move_uploaded_file($_FILES['img1']['tmp_name'], "../../images/req_imgs/".$img1);
				if ($_FILES['img2']['name']!="") {
					$img2=uniqid()."_".$_FILES['img2']['name'];
					mysqli_query($connect,"UPDATE service_request SET img2='$img2' WHERE id='$last_id'");
					move_uploaded_file($_FILES['img2']['tmp_name'], "../../images/req_imgs/".$img2);
				}
				if ($_FILES['img3']['name']!="") {
					$img3=uniqid()."_".$_FILES['img3']['name'];
					mysqli_query($connect,"UPDATE service_request SET img3='$img3' WHERE id='$last_id'");
					move_uploaded_file($_FILES['img3']['tmp_name'], "../../images/req_imgs/".$img3);
				}
				if ($_FILES['img4']['name']!="") {
					$img4=uniqid()."_".$_FILES['img4']['name'];
					mysqli_query($connect,"UPDATE service_request SET img4='$img4' WHERE id='$last_id'");
					move_uploaded_file($_FILES['img4']['tmp_name'], "../../images/req_imgs/".$img4);
				}
				header("Location:../dashboard.php?msg=success");
				die();
			} else {
				header("Location:../dashboard.php?msg=error");
				die();
			}

		} elseif ($_POST['submit']=="now") {

			// $id=$_SESSION['customer_id'];
			$id="1";
			$service_id=$_POST['service_id'];
			$service_des=$_POST['service_des'];
			$cdate=$_POST['cdate'];
			$ctime=$_POST['ctime'];
			$status="2";
			$dt=date('Y-m-d');
			$img1=uniqid()."_".$_FILES['img1']['name'];

			$sql="insert into service_request(customer_id,service_id,service_des,cdate,ctime,status,added_on,img1) values('$id','$service_id','$service_des','$cdate','$ctime','$status','$dt','$img1')";
			// echo $sql;
			$result=mysqli_query($connect,$sql);

			$last_id=mysqli_insert_id($connect);
			// echo $last_id;

			if ($result) {
				move_uploaded_file($_FILES['img1']['tmp_name'], "../../images/req_imgs/".$img1);
				if ($_FILES['img2']['name']!="") {
					$img2=uniqid()."_".$_FILES['img2']['name'];
					mysqli_query($connect,"UPDATE service_request SET img2='$img2' WHERE id='$last_id'");
					move_uploaded_file($_FILES['img2']['tmp_name'], "../../images/req_imgs/".$img2);
				}
				if ($_FILES['img3']['name']!="") {
					$img3=uniqid()."_".$_FILES['img3']['name'];
					mysqli_query($connect,"UPDATE service_request SET img3='$img3' WHERE id='$last_id'");
					move_uploaded_file($_FILES['img3']['tmp_name'], "../../images/req_imgs/".$img3);
				}
				if ($_FILES['img4']['name']!="") {
					$img4=uniqid()."_".$_FILES['img4']['name'];
					mysqli_query($connect,"UPDATE service_request SET img4='$img4' WHERE id='$last_id'");
					move_uploaded_file($_FILES['img4']['tmp_name'], "../../images/req_imgs/".$img4);
				}
				header("Location:../dashboard.php?msg=success");
				die();
			} else {
				header("Location:../dashboard.php?msg=error");
				die();
			}

		}
		
		// pr($_FILES);
		// prx($_POST);		

	} else {
		header("Location:../message.html");
		exit();
	}
	

?>