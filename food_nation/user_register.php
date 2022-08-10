<?php
     $server = "localhost" ;
     $username = "root" ;
     $password = "" ;
     $dbname = "rbs" ;

       $conn = mysqli_connect($server, $username, $password, $dbname) ;


        if(isset ($_POST['submit'])){
            if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])){
            $name = $_POST['username'] ;
            $email = $_POST[ 'password'] ;
            $address = $_POST['email'] ;

            $query = "insert into form(username,password,email) values('$username' , '$password' , '$email')" ;
            
            $run = mysqli_query ($conn,$query) or die (mysqli_error());

        if ($run){
            echo "Form submitted successfully" ; 
        }
        else {

            echo "Form not submitted";

        }
            }
            else{
        echo "all fields required" ;
        }

                }

    ?>