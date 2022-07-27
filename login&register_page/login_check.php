<?php 

error_reporting(0);
session_start();

//Change to your database connection.
$host="localhost";

$user="root";

$password="root";

$db="restLogin";


$data=mysqli_connect($host,$user,$password,$db);


if($data===false)
{
	die("connection error");
}

		
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name = $_POST['username'];

		$pass = $_POST['password'];

		// Change to your table name in this sql query.
		$sql="select * from user where username='".$name."' AND password='".$pass."'  ";

		$result=mysqli_query($data,$sql);

		$row=mysqli_fetch_assoc($result);



		if($row["usertype"]=="user")
		{

			$_SESSION['username']=$name;

			$_SESSION['usertype']="user";
			
			// Change the url to your login page
			header("location:userhome.php");
		}

		elseif($row["usertype"]=="admin")
		{	
			$_SESSION['username']=$name;

			$_SESSION['usertype']="admin";
			
			// Change the url to your admin page
			header("location:adminhome.php");
		}

		else
		{
			

			$message= "username or password do not match";

			$_SESSION['loginMessage']=$message;

			header("location:login.php");
		}


	}


?>
