<?php
session_start();
$servername='localhost';
    $username='root';
    $password='';
    $dbname = "rbs";
	
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error($sql));
        }
	$mysqli = new mysqli('localhost', 'root',
                $password, 'rbs');
	$id=$_GET['id'];
$sql="select * from contacts where id='$id';";
$result=$mysqli->query($sql);

if(isset($_POST["update"])) {
        $name = $_POST["txtName"];
        $email = $_POST["txtEmail"];
		$mobile = $_POST["txtMobile"];
		$message = $_POST["txtMessage"];
		$remarks = $_POST["txtRemarks"];
		$sql="update `contacts` set remarks='$remarks' where id=$id";
		$result=mysqli_query($conn,$sql);	
        if ($result){
			echo"Updated Successfully";
			header("Location:admin-managecontacts.php");
			
		}
		else{
			die('Could not Connect MySql Server:' .mysql_error());
		}
	}
	$mysqli->close();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Welcome to the Food Nation</title>
    <?php include('./includes/admin-header.php') ?>
	<style>
	h2{text-align:center;}
	</style>
  </head>

    <body class="bg-light">

    <body data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">
      
    <?php include('./includes/admin-nav.php') ?>
	
        <div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-12 col-lg-8 section-heading">
                <h4 class="heading mb-5">FOOD NATION - Admin Login Page</h4>
				</div>
				</div>
				</div>
				</div>
<table align="center" border='1px' style="width:600px; line=height:40px;">

		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Message</th>
		<th>Remarks</th>
	<?php
		while($rows=$result->fetch_assoc())
			{
	?>
			<tr>
				<td><?php echo $rows['id'] ;?></td>
				<td><?php echo $rows['name'] ;?></td>	
				<td><?php echo $rows['email'] ;?></td>
				<td><?php echo $rows['mobile'] ;?></td>
				<td><?php echo $rows['message'] ;?></td>
				<td><?php echo $rows['remarks'] ;?></td>
			</tr>
		
		<?php
			}
		?>
		
	</table>
	<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/c82e9a37b7.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <style>
        body {
            background: #e9ecef;
            font-family: sans-serif;
        }
    </style>
</head>
<body class="py-5">
    <main class="container">
        <div class="row">
            <div class="offset-2 col-8 font-size-xl">
                <div class="bg-secondary text-light rounded  text-center p-3">
                    <h2 class="font-weight-bold">Update Contact Form</h2>
                </div>
                <form action="" method="post" class="my-5">
                <!--    <div class="form-group">
                        <label for="txtName">Name:</label>
                        <input type="text" class="form-control" name="txtName" required>
                    </div>
                    <div class="form-group">
                        <label for="txtDate">Email:</label>
                        <input type="text" class="form-control" name="txtEmail" id="txtDate" required>
                    </div>
					<div class="form-group">
                        <label for="txtSpecialRequest">Mobile:</label>
                        <input type="text" class="form-control" name="txtMobile" required>
                    </div>
					<div class="form-group">
                        <label for="txtSpecialRequest">Message:</label>
                        <input type="text" class="form-control" name="txtMessage"required>
                    </div> 
					-->
					<div class="form-group">
                        <label for="txtSpecialRequest">Remarks:</label>
                        <input type="text" class="form-control" name="txtRemarks"required>
                    </div>
                    <button type="submit" class="btn btn-dark" name="update">Update</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>