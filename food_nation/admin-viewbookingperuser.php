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
		<th>View</th>
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
				<td><a href="admin-viewbookingperuser.php?id=<?php echo $rows['id'] ;?>">View</a></td>
				<td><a href="admin-updatebookingperuser.php?id=<?php echo $rows['id'];?>">Update</a></td>
				<td><a href="admin-deletebookingperuser.php?id=<?php echo $rows['id'];?>">Delete</a></td>
			</tr>
		<?php
			}
		?>
	</table>