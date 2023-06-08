
<?php 
require("./includes/db.inc.php");

$id = $_GET['id'];

$res=mysqli_query($connect,"SELECT * FROM service WHERE id='$id'");

$data=mysqli_fetch_assoc($res);

// prx($data);

// echo $id;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>notification</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="./asset/dashboard/css/style.css">

</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-2 ml-auto">
				<a href="./dashboard.php" class="text-dark"><h2>&times;</h2></a>
			</div>
		</div>
		<div class="row text-center justify-content-center px-5" id="banner" >
			<h2><?php echo $data['name']; ?> Service</h2><br><br>
			<h5>Please Select One Option</h5>
			<div class="col-12 mt-4">
				<a href="presentrequirements.php?id=<?php echo $id; ?>">
					<div class="jumbotron bg-light shadow">
						<img src="./asset/dashboard/images/today.jpg" class="img-fluid" style="width: 150px;height: 150px;" alt="<?php echo $data; ?>"></a>
						<p>Service For Today</p>
					</div>
				</a>
			</div>
			<div class="col-12" >
                <a href="futurerequirements.php?id=<?php echo $id; ?>">
					<div class="jumbotron bg-light shadow">
						<img src="./asset/dashboard/images/futurebooking.jpg" class="img-fluid" style="width: 150px;height: 150px;" alt="<?php echo $data; ?>">
						<p>For Future Services</p>
					</div>
				</a>
			</div>
		</div>
    </div>


</div>




</body>

<script type="text/javascript" src="./asset/dashboard/js/app.js"></script>
<script src="js/main.js"></script>

</html>