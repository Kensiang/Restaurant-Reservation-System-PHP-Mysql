<!doctype html>
<html lang="en">
  <head>
    <title>Welcome to the Food Nation</title>

	<style>
		.viewform{
			margin: auto;
    width: 100%;
    height: 100%;
    padding: 10px;
    text-align: center;
		}
		</style>
    <?php include('./includes/header.php') ?>
  </head>

  <?php include('./includes/nav.php') ?>

  		<div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-12 col-lg-8 section-heading">

<?php
$userBookingName =$_SESSION['username'];

$servername='localhost';
    $username='root';
    $password='';
    $dbname = "rbs";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
	$mysqli = new mysqli('localhost', 'root',
                $password, 'rbs');
$sql="select * from restaurantreservation WHERE restaurantreservation.name = '$userBookingName'";
$result=$mysqli->query($sql);
$mysqli->close();	
?>
<div class="viewform">
<table align="center" border='1px' style="width:600px; line=height:40px;">

	<tr>
		<h2>Reservation Record<?php //echo $userBookingName ?></h2>
	</tr>

		<th>Booking ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Date & Time Reserved</th>
		<th>Restaurant</th>
		<th>Pax</th>
		<th>Edit Booking</th>
		<th>Cancel Booking</th>
	<?php
		while($rows=$result->fetch_assoc())
			{
	?>
			<tr>
				<td><?php echo $rows['bookingid'] ;?></td>
				<td><?php echo $rows['name'] ;?></td>	
				<td><?php echo $rows['email'] ;?></td>
				<td><?php echo $rows['phone'] ;?></td>
				<td><?php echo $rows['time'] ;?></td>
				<td><?php echo $rows['restauranttype'] ;?></td>
				<td><?php echo $rows['pax'] ;?></td>
				<td><a href="reservationbooking.php?id=<?php echo $rows['bookingid'] ;?>">Edit Booking</a></td>
				<td><a href="user-deletebooking.php?id=<?php echo $rows['bookingid'];?>" onclick="return confirm('Do you really want to cancel this booking?');">Cancel Booking</a></td>
			</tr>
		<?php
			}
		?>
		
	</table>

	</div>
            </div>
          </div>
        </div>
		</div>
	<?php include('./includes/footer.php') ?>

</div>
</body>
</html>