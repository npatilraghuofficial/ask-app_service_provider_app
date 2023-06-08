<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
	<link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.0/themes/redmond/jquery-ui.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>




	<link type="text/css" rel="stylesheet" href="./asset/dashboard/css/style.css">
	<link rel="stylesheet" href="./css/animate.css">
	<link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <div id="fh5co-offcanvas">
        <a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span><i class=" fa fa-times"></i></span></span></a>
        <div class="fh5co-bio">
            <figure>
                <img src="images/person1.jpg" alt="F" >
            </figure>
            <h3 class="heading">About Me</h3>
            <h2>Hello</h2>
            <p>Name</p>
            
        </div>

        <div class="fh5co-menu">
            <div class="fh5co-box">
                <h3 class="heading">Categories</h3>
                <ul>
                    <li><a href="#">Invite Friends</a></li>
                    <li><a href="#">Become A Service Provider</a></li>
                    <li><a href="#">Customer-Support</a></li>
                    <li><a href="#">Rate Our App </a></li>
                    <li><a href="#">Terms & Conditions</a></li>

                    <li><a href="contactus.php">Contact</a></li>
                    

                </ul>
                </form>
            </div>
            </div>
        </div>
    </div>
	<div class="container p-4 mb-5">

		<div class="row my-4">
			<div class="col-2 ml-4">
				<a href="javascript:void(0)" class="js-fh5co-nav-toggle fh5co-nav-toggle">
					<i class="fas fa-bars"></i>
				</a>
			</div>
			<div class="col-2 ml-auto mr-4">
				LOGO
			</div>
		</div>
		
		<div class="row mt-5">
			<div class="col-6">
				<div class="form-group">
					<i class="fas fa-map-marker-alt"></i>
					<input type="text" class="form-control" placeholder="location">
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-12">
				<div class="form-group dropdown w-100">
					<i class="fas fa-search"></i>
					<input type="search" class="form-control" id="service_search" onkeyup="search();" placeholder=" Search services...">
					<ul class="list-group dropdown-content" id="list_group">                        
                        <li><a href="servicechoice.php?id=1">Home Appliances Services</a></li>
                        <li><a href="servicechoice.php?id=2">Electrician Services</a></li>
                        <li><a href="servicechoice.php?id=3">Computer Services</a></li>
                        <li><a href="servicechoice.php?id=4">Mobile Services</a></li>
                        <li><a href="servicechoice.php?id=5">Photographers</a></li>
                        <li><a href="servicechoice.php?id=6">Plumbers</a></li>
                        <li><a href="servicechoice.php?id=7">Painters</a></li>
                        <li><a href="servicechoice.php?id=8">Carpenters</a></li>
                        <li><a href="servicechoice.php?id=9">Beautician</a></li>
                        <li><a href="servicechoice.php?id=10">Groceries</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="row text-center  justify-content-center my-1 mx-2" id="banner">
			<div class="col-6">
				<a href="servicechoice.php?id=1">
					<div class="shadow">
						<img src="./asset/dashboard/images/homeapp.png" alt="homeapp">
						<p>Home Appliances</p>
					</div>
				</a>
			</div>
			<div class="col-6">
				<a href="servicechoice.php?id=2">
					<div class="shadow">
						<img src="./asset/dashboard/images/electrician.png" alt="homeapp">
						<p>Electrician</p>
					</div>
				</a>
			</div>
			<div class="col-6">
				<a href="servicechoice.php?id=3">
					<div class="shadow">
						<img src="./asset/dashboard/images/plumber.png" alt="homeapp">
						<p>Plumbers</p>
					</div>
				</a>
			</div>
			<div class="col-6">
				<a href="servicechoice.php?id=4">
					<div class="shadow">
						<img src="./asset/dashboard/images/pc.png" alt="homeapp">
						<p>Computer Services</p>
					</div>
				</a>
			</div>
		</div>
		
		<div class="row text-center justify-content-center mt-3 m-1" id="banner2">
			<div class="col-4">
				<a href="servicechoice.php?id=5">
					<div>
						<img src="./asset/dashboard/images/photo.png" alt="homeapp">
						<p>Photographers</p>
					</div>
				</a>
			</div>
			<div class="col-4">
				<a href="servicechoice.php?id=6">
					<div>
						<img src="./asset/dashboard/images/mobile.png" alt="homeapp">
						<p>Mobile Services</p>
					</div>
				</a>
			</div>
			<div class="col-4">
				<a href="servicechoice.php?id=7">
					<div>
						<img src="./asset/dashboard/images/painter.png" alt="homeapp">
						<p>Painters</p>
					</div>
				</a>
			</div>
			<div class="col-4">
				<a href="servicechoice.php?id=8">
					<div>
						<img src="./asset/dashboard/images/carpenter.png" alt="homeapp">
						<p>Carpenters</p>
					</div>
				</a>
			</div>
			<div class="col-4">
				<a href="servicechoice.php?id=9">
					<div>
						<img src="./asset/dashboard/images/makeup.png" alt="homeapp">
						<p>Beautician</p>
					</div>
				</a>
			</div>
			<div class="col-4">
				<a href="servicechoice.php?id=10">
					<div>
						<img src="./asset/dashboard/images/groceries.png" alt="homeapp">
						<p>Groceries</p>
					</div>
				</a>
			</div>
		</div>

	</div>


	<footer>

		<style>
			.n1:hover {
				background-color: whitesmoke;
				text-decoration: none;
			}
		</style>
		<div class="n1">
			<a href="dashboard.php"><i class="fas fa-home"></i>
				<p>Home</p>
			</a>
		</div>
		<div class="n1">
			<a href="mybookings.php"><i class="fas fa-bars"><sup><span class="badge">
							<font color="red">1</font>
						</span></sup></i>
				<p>Bookings</p>
			</a>
		</div>
		<div class="n1">
			<a href="myorders.php">&nbsp;<i class="fas fa-shopping-bag"><sup><span class="badge">
							<font color="red">3</font>
						</span></sup></i>
				<p>Orders</p>
			</a>
		</div>
		<div class="n1">
			<a href="notification.php"><i class="fas fa-bell"><sup><span class="badge">
							<font color="red">9</font>
						</span></sup></i>
				<p>Notifications</p>
			</a>
		</div>
	</footer>

</body>

<!-- <script type="text/javascript" src="./asset/dashboard/js/app.js"></script> -->
<script src="./asset/dashboard/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script>
      function search()
        {
            let filter = document.getElementById('service_search').value.toUpperCase();
            let ul = document.getElementById('list_group');
            let li = ul.getElementsByTagName('li');
            for(var i=0; i<li.length; i++) {
                let a = li[i].getElementsByTagName('a')[0];
                let textValue = a.textContent || a.innerHTML;
                    if (textValue.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display='';
                    } else {
                        li[i].style.display='none';
                    }
                }
        }
</script>

</html>