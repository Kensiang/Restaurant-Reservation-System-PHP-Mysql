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
	$sql="delete from newreservations where id='$id';";
	$result=$mysqli->query($sql);
	if($result){
	echo"Reservation is cancelled successfully";
	}else{
	$mysqli->close();
	}
	
}
?>
