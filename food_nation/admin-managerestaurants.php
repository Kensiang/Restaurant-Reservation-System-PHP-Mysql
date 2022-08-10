<?php
$servername='localhost';
    $username='root';
    $password='';
    $dbname = "food_nation";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error($sql));
        }
	$mysqli = new mysqli('localhost', 'root',
                $password, 'food_nation');
	
$sql="select * from products";

	if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `products` WHERE CONCAT(`id`, `name`, `location`, `cuisine`, `price`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `products`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "food_nation");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
$filter_result=$mysqli->query($sql);	
?>
<!doctype html>
<html lang="en">
  <head>
  <style>
		.centerview {
		margin: auto;
		width: 100%;
		height: 100%;
		padding: 10px;
		text-align: center;
		margin-left: auto;
  		margin-right: auto;
		}
		.styled-table {
		border-collapse: collapse;
		margin-left: auto;
  		margin-right: auto;
		font-size: 0.9em;
		font-family: sans-serif;
		min-width: 90%;
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
		}
		.styled-table thead tr {
		background-color: #808080;
		color: #ffffff;
		text-align: left;
		}
		.styled-table th, .styled-table td {
		padding: 12px 15px;
		}
		.styled-table tbody tr {
		border-bottom: thin solid #808080;
		}

		.styled-table tbody tr:nth-of-type(even) {
			background-color: #f3f3f3;
		}

		.styled-table tbody tr:last-of-type {
			border-bottom: 2px solid #808080;
		}
		.styled-table tbody tr.active-row {
			font-weight: bold;
			color: #808080;
		}
		h3 {
		text-align: center;
		}
	</style>
    <title>Welcome to the Food Nation</title>
    <?php include('./includes/admin-header.php') ?>
	<style>
	h2{text-align:center;}
	</style>
  </head>

    <body class="bg-light">

    <body data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">
      
    <?php include('./includes/admin-nav.php') ?>
				
			<table class="styled-table">
				<tr>
				<br><br><br><br><h3>List of Restaurants</h3><br>
				</tr>

				<h3><form action="admin-managerestaurants.php" method="post">
						<input type="text" name="valueToSearch" placeholder="Search Name">
						<input type="submit" name="search" value="Filter"><br><br></h3>
	<tr>		
		<th>ID</th>
		<th>Name</th>
		<th>Location</th>
		<th>Cuisine</th>
		<th>Price</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
	
	<?php while($rows=mysqli_fetch_array($search_result)):?>
				<tr>
				<td><?php echo $rows['id'] ;?></td>
				<td><?php echo $rows['name'] ;?></td>	
				<td><?php echo $rows['location'] ;?></td>
				<td><?php echo $rows['cuisine'] ;?></td>
				<td><?php echo $rows['price'] ;?></td>			
				<td><a href="admin-updateperrestaurant.php?id=<?php echo $rows['id'];?>">Update</a></td>
				<td><a href="admin-deleteperrestaurant.php?id=<?php echo $rows['id'];?>">Delete</a></td>

				</tr>
		<?php endwhile;?>

		</table>
		</form>
		</body>
				
		<!-- .section -->
        <?php include('./includes/footer.php') ?>
 
</html>