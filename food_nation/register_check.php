<?php 
session_start();
$data = mysqli_connect("localhost","root","","rbs");

if($data==false){
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['usrnm'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $userType= "user";
    $password = $_POST['psw'];
    $password2 = $_POST['psw2'];

    //Change to your table in this sql query.
    if($password != $password2){
        $_SESSION['psw2NotMatch'] = "Password 1 and Password 2 Did not Match";
        header("location:register.php");
    }
    else{
        $sql = "INSERT INTO user (username,phone,email,usertype,password) VALUES ('$name','$phone','$email','$userType','$password')";

        $res = mysqli_query($data,$sql);
    

        if($res == TRUE){
            $_SESSION['registered']= "<div class='sucess'>Account registered successfully.</div> ";

            //Redirect to login
            header("location:login.php");
        }else{
            $_SESSION['failed']="Account failed to register.";
            header("location:register.php");
        }

    }
}
?>
