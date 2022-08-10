<?php
$servername='localhost';
    $username='root';
    $password='';
    $dbname = "rbs";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
	$mysqli = new mysqli('root', 'root',
                $password, 'rbs');
$sql="select * from rbs_users;";
$result=$mysqli->query($sql);
$mysqli->close();	
?>
<h2> Hello Admin, click on the below to view booking </h2>
<a href="admin-views.php">View Booking</a>
<table align="center" border='1px' style="width:600px; line=height:40px;">
	<tr>
		<h2>User record</h2>
	</tr>

		<th>User ID</th>
		<th>Name</th>
		<th>Email</th>
	<?php
		while($rows=$result->fetch_assoc())
			{
	?>
			<tr>
				<td><?php echo $rows['uid'] ;?></td>
				<td><?php echo $rows['name'] ;?></td>	
				<td><?php echo $rows['email'] ;?></td>
			</tr>
		<?php
			}
		?>
	</table>
<a href="viewbooking.php"></a>