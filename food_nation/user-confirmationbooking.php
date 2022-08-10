<?php
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

$sql="select * from newreservations where id='$id';";
$result=$mysqli->query($sql);
$mysqli->close();	
?>
<html>
<head>
<title>Confirmation Page of Web Form</title>
</head>
<h1>Confirmation Page of Customer Info</h1>

<p>Thank you for submitting this form. 

<p>We have successfully received it. 

<p>Below is a summary of the information you provided.<br><br>  
<?php
echo 'First Name: ' . $_POST ["name"] . '<br>';
echo 'Data reserved: ' . $_POST ["date_reserved"] . '<br>';
echo 'Special Request: ' . $_POST ["specialrequest"];
?>
