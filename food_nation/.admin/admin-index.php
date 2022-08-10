<?php
session_start();
require_once "db.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Welcome to the Food Nation</title>
    <?php include('./includes/header.php') ?>
	<style>
	h2{text-align:center;}
	</style>
  </head>

    <body class="bg-light">


            

        <div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-12 col-lg-8 section-heading">
                <h2 class="heading mb-5">FOOD NATION - Admin Login Page</h2>
				<form action="admin-views.php" method="post">
        <div class="login-box">
            <h1>Login</h1>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username"
                         name="username" value="">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
 
            <input class="button" type="submit"
                     name="login" value="Login">
        </div>
    </form>
              </div>
            </div>
          </div>
        </div> <!-- .section -->
        

      
        <?php include('./includes/footer.php') ?>

    </div>
</html>
 
<body>
    
</body>
 
</html>