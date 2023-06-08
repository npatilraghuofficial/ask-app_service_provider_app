
<?php 
require("./includes/db.inc.php");

$id = $_GET['id'];

$res=mysqli_query($connect,"SELECT * FROM service WHERE id='$id'");

$data=mysqli_fetch_assoc($res);

?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Present Bookings</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>





	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
	<link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.0/themes/redmond/jquery-ui.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



	<link type="text/css" rel="stylesheet" href="./asset/dashboard/css/style.css">
	
<link rel="stylesheet" href="css/style.css">

</head>


                

    


<script type="text/javascript">
function showTime()
{
var date = new Date();
var h = date.getHours();
var m = date.getMinutes();
var s = date.getSeconds();
var session="AM";
if(h==0){
    h=12;
}
if(h>12){
    h=h-12;
    session="PM";
     }
h = (h < 10) ? "0" + h : h;
m = (m < 10) ? "0" + m : m;
s = (s < 10) ? "0" + s : s;

   
var time= h + ":" + m + ":" + s + "" + "_"+ session;
document.getElementById("MyClockDisplay").innerText = time;
document.getElementById("MyClockDisplay").innerContex = time;

setTimeout(showTime,1000);
}
showTime();

</script>
<body>
  
   
    
	<div class="container p-4 mb-5">
		<div class="row">
			<div class="col-3 ml-auto">
				<a href="./dashboard.php" class="text-dark"><h1>&times;</h1></a>
			</div>
		</div>

        
        <h3><?php echo $data['name'] ?></h3>

		   <form action="./includes/service_req.inc.php" method="POST" enctype="multipart/form-data">
		   <center> <br><h4>Tell Us Your Requirements?</h4></center>	

		   
		   <div id="MyClockDisplay" class="clock"></div>

		   <textarea class="form-control" id="service_des" name="service_des" placeholder="Tell us how can we serve you?" rows="5" required></textarea>
		  <input type="hidden" name="service_id" id="service_id" value="<?php echo $data['id']; ?>">

		  <FONT COLOR="BLACK">* *Add Images</FONT><BR>

		  <input type="file" name="img1" placeholder="" required>
		  <img src="" width="80px" height="60px">
		  
		  <input type="file" name="img2" placeholder="optional">
		  <img src="" width="80px" height="60px">
		  
		  <input type="file" name="img3" placeholder="optional">
		  <img src="" width="80px" height="60px">
		  
		  <input type="file" name="img4" placeholder="optional">
		  <img src="" width="80px" height="60px"><br><span>
		  
		  
		  <label for="date" class="mt-3">Date you need the service?</label>
		  <input class="form-control" type="text" name="cdate" id="cdate" Placeholder="Enter Date" readonly required>
		  <script type="text/javascript">
			  $(function(){
	            du=new Date();
	            $("#cdate").val(du.getDate()+"-"+du.getMonth()+"-"+du.getFullYear());
        	});	
		  </script>
		  
		  <label for="time" class="mt-3">when you need the service?</label><BR>
		  <span id="spantime"><FONT COLOR="GREEN">We operate only From 8:00 AM - 8:00 PM(ALL 7 DAYS)</FONT></span>
		  <H6>Select Approximate Time</H6>
		  <select class="form-control required" name="ctime" id="time_hr" title="time" required>
		  
		  
		  		<option value="">---------------------select-----------------------</option>
			  <option value="8:00">8:00-AM</option>
			  <option value="9:00">9:00-AM</option>
			  <option value="10:00">10:00-AM</option>
			  <option value="11:00">11:00-AM</option>
			  <option value="12:00">12:00-PM</option>
			  <option value="13:00">1:00-PM</option>
			  <option value="14:00">2:00-PM</option>
			  <option value="15:00">3:00-PM</option>
			  <option value="16:00">4:00-PM</option>
			  <option value="17:00">5:00-PM</option>
			  <option value="18:00">6:00-PM</option>
			  <option value="19:00">7:00-PM</option>
			  <option value="20:00">8:00-PM</option>
		  
		  
		  
			  
		  </select>
		  
			 
        <center> <td><a href=""><button class="btn btn-primary mb-5 mt-4" name="submit" value="now">Submit</button></a><BR></center> 

        </form>

</div>        

</div>


</body>

<script type="text/javascript" src="./asset/dashboard/js/app.js"></script>
<script src="js/main.js"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</html>