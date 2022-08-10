<?php
include_once("db.php");
session_start();
$query = "SELECT * FROM rbs_users WHERE email = '" . $email. "' and password = '" . md5($password). "'";
$result=mysql_connect($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-8">
<div class="card">
<div class="card-body">
<h1>WELCOME:</h1>
            <?php
                require'conn.php';
 
 
                $query = mysqli_query($conn, "SELECT * FROM `rbs_users` WHERE `uid`='$_SESSION[uid]'") or die(mysqli_error());
                $fetch = mysqli_fetch_array($query);
 
                echo "<h2 class='text-success'>".$fetch['username']."</h2>";
            ?>

<h5 class="card-title">Name :- <?php echo $_SESSION['name']?></h5>
<p class="card-text">Email :- <?php echo $_SESSION['email']?></p>
<p class="card-text">Mobile :- <?php echo $_SESSION['mobile']?></p>
<a href="logout.php" class="btn btn-primary">Logout</a>
</div>
</div>
</div>
</div>       
</div>
</body>
</html>