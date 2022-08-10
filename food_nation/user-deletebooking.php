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
					$servername='localhost';
						$username='root';
						$password='';
						$dbname = "rbs";
						$id=$_GET['id'];
						$conn=mysqli_connect($servername,$username,$password,"$dbname");
						if(!$conn){
							die('Could not Connect MySql Server:' .mysql_error());
							}
						$mysqli = new mysqli('localhost', 'root',
									$password, 'rbs');


					if(isset($_GET['id'])){
						$id=$_GET['id'];
						$sql="delete from restaurantreservation where bookingid='$id';";
						$result=$mysqli->query($sql);
						if($result){
						echo"Your reservation is cancelled successfully";
						}else{
						$mysqli->close();
						}
						
					}
					?>
					<div id="center_button">
						<br><button  onclick="location.href='./index.php'">Back to Home</button>
					</div>
				</div>
			</div>
        </div>
        </div>
     </div>
<?php include('./includes/footer.php') ?>
</body>
</html>