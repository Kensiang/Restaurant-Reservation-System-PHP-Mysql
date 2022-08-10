

<html>

<head>

<style>
.formcenter {
  margin: auto;
  width: 100%;
  height: 100%;
  padding: 10px;
  text-align: center;
}
</style>
<title>Welcome to the Food Nation</title>
    <?php include('./includes/admin-header.php') ?>
</head>

<body>



<div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-12 col-lg-8 section-heading">
				<div class="formcenter">
															<?php
															include_once 'database.php';
															if(isset($_POST['booknow']))
															{	 
																$name = $_POST['name'];
																$phone = $_POST['phone'];
																$email = $_POST['email'];
																$time = $_POST['time'];
																$restauranttype = $_POST['restauranttype'];
																$pax = $_POST['pax'];
																$sql = "INSERT INTO restaurantreservation (name,phone,email,time,restauranttype,pax)
																VALUES ('$name','$phone','$email','$time','$restauranttype','$pax')";
																if (mysqli_query($conn, $sql)) {
																	echo "You have successfully made it!";

																//	email confirmation 
																} else {
																	echo "please fill in all the details " . $sql . "
															" . mysqli_error($conn);
																}
																mysqli_close($conn);
															}
															?>
					<div id="center_button">
						<br><button  onclick="location.href='index%20admin%20page.php'">Back to Home</button>
					</div>
				</div>
			</div>
        </div>
        </div>
     </div>
<?php include('./includes/footer.php') ?>
</body>
</html>