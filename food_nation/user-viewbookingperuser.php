<!doctype html>
<html lang="en">
  <head>
    <title>Welcome to the Food Nation</title>
    <?php include('./includes/header.php') ?>


	<div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-12 col-lg-8 section-heading">

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
$sql="select * from newreservations where id='$id';";
$result=$mysqli->query($sql);
$mysqli->close();	
?>
<table align="center" border='1px' style="width:600px; line=height:40px;">
	<tr>
		<h2>Reservation Record</h2>
	</tr>

		<th>User ID</th>
		<th>Name</th>
		<th>Date Reserved</th>
		<th>Special Request</th>
		<th>Edit</th>
		<th>Delete</th>
	<?php
		while($rows=$result->fetch_assoc())
			{
	?>
			<tr>
				<td><?php echo $rows['id'] ;?></td>
				<td><?php echo $rows['name'] ;?></td>	
				<td><?php echo $rows['date_reserved'] ;?></td>
				<td><?php echo $rows['specialrequest'] ;?></td>
				<td><a href="user-updatebookingperuser.php?id=<?php echo $rows['id'];?>">Update</a></td>
				<td><a href="user-deletebookingperuser.php?id=<?php echo $rows['id'];?>">Delete</a></td>
			</tr>
		<?php
			}
		?>
	</table>

				</div>
            </div>
          </div>
        </div>

		<?php include('./includes/footer.php') ?>

</div>
</body>
</html>