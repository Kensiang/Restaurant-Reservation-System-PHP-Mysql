<?php 
    session_start();

    //it will redirect to login page if we access the admin or user home page directly without login.
    //it will redirect to login page if we access admin page with user account, or vice-versa.
    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }
    elseif($_SESSION['usertype']=='admin'){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
</head>
<body>
    <h1>User Home</h1>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>