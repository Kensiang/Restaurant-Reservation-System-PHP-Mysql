

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
    <?php include('./includes/header.php') ?>
</head>

<body>



<div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-12 col-lg-8 section-heading">
				<div class="formcenter">
															<?php
															include_once 'database.php';
															if(isset($_POST['feedbacksubmit']))
															{	 
																$name = $_POST['name'];
                                                                $email = $_POST['email'];
																$mobile = $_POST['mobile'];
                                                                $msg = $_POST['message'];
																$sql = "INSERT INTO contacts (name,email,mobile,message)
																VALUES ('$name','$email','$mobile','$message')";
																if (mysqli_query($conn, $sql)) {
																	echo "Your feedback have been heard! Our team will get back to you shortly.";

																//	email confirmation 
																} else {
																	echo "please fill in all the details " . $sql . "
															" . mysqli_error($conn);
																}
																mysqli_close($conn);
															}
															?>
					<div id="center_button">
						<br><button  onclick="location.href='index.php'">Back to Home</button>
					</div>
				</div>
			</div>
        </div>
        </div>
     </div>
<?php include('./includes/footer.php') ?>
</body>
</html>
