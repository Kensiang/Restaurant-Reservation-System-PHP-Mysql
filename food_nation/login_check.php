<?php 
error_reporting(0);
session_start();
//Change to your database connection.
$host="localhost";
$user="root";
$password="";
$db="rbs";

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

            $_SESSION['logged'] = "login";

			header("location:index.php");
		}
		elseif($row["usertype"]=="admin")
		{	
			$_SESSION['username']=$name;

			$_SESSION['usertype']="admin";

			$_SESSION['loggedadmin'] = "loginadmin";

			header("location:index%20admin%20page.php");
		}
		else
		{
			$message= "username or password do not match";

			$_SESSION['loginMessage']=$message;

			header("location:login.php");
		}
	}
?>