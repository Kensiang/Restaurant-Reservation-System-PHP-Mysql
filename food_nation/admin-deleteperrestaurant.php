<?php
$servername='localhost';
    $username='root';
    $password='';
    $dbname = "food_nation";
	$id=$_GET['id'];
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
	$mysqli = new mysqli('localhost', 'root',
                $password, 'food_nation');


if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="delete from products where id='$id';";
	$result=$mysqli->query($sql);
	if($result){
	echo"Restaurant is deleted successfully";
	}else{
		$mysqli->close();
	}
	header('Refresh: 2;admin-managecontacts.php');	
}
?>
