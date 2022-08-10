<!doctype html>
<html lang="en">
  <head>
    <title>Welcome to the Food Nation</title>
    <link rel="stylesheet" type="text/css" href="css/login&register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include('./includes/header.php') ?>
  </head>

    <?php include('./includes/nav.php') ?>

        <div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-12 col-lg-8 section-heading">

              <center>
                <div class="login-title">
                  <h1>Welcome to the Restaurant</h1>            
                  <h3>Login Form</h3>
                </div>
                
                    <h3>
                        <?php 
                        error_reporting(0);
                        session_start();
                        
                        ?>
                    <div class="session">   
                    <?php    
                        if(isset($_SESSION['loginMessage'])){
                          echo $_SESSION['loginMessage'];
                          unset($_SESSION['loginMessage']);
                        }
	
                        if(isset($_SESSION['registered'])){
                            echo $_SESSION['registered'];
                            unset($_SESSION['registered']);
                        }

                        if(isset($_SESSION['failedToAccessAdminPage_1'])){
                          echo $_SESSION['failedToAccessAdminPage_1'];
                          unset($_SESSION['failedToAccessAdminPage_1']);
                        }
                        if(isset($_SESSION['failedToAccessAdminPage_2'])){
                          echo $_SESSION['failedToAccessAdminPage_2'];
                          unset($_SESSION['failedToAccessAdminPage_2']);
                        }

                    ?>
                    </div> 
                    </h3>
              </center>
			
			
              <form action="login_check.php" method="POST" class="login_form" style="max-width:500px;margin:auto">
                
                <div class="input-container">
                            <i class="fa fa-user icon"></i>
                          <input class="input-field" placeholder="Username" type="text" name="username">
                </div>

                <div class="input-container">
                            <i class="fa fa-key icon"></i>
                  <input class="input-field" placeholder="Password" type="Password" name="password">
                </div>

                  
                  <input class="btn" type="submit" name="submit" value="Login">
              </form>

              <p class="signin">Not yet a memeber?<a href="register.php">Sign Up</a></p>

             
              </div>
            </div>
          </div>
        </div> <!-- .section -->
      
        <?php include('./includes/footer.php') ?>

    </div>
  </body>
</html>