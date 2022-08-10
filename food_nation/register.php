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

                <form action="register_check.php" method="POST" style="max-width:500px;margin:auto">
                    <center>
                        <h3 class="login-title">Register Form</h3>
                        <h3>
                        <?php 
                        error_reporting(0);
                        session_start();
                        session_destroy();
                        ?>
                    <div class="session">   
                    <?php    
                        if(isset($_SESSION['psw2NotMatch'])){
                            echo $_SESSION['psw2NotMatch'];
                            unset($_SESSION['psw2NotMatch']);
                        }
                        if(isset($_SESSION['failed'])){
                            echo $_SESSION['failed'];
                            unset($_SESSION['failed']);
                        }
                    ?>
                    </div> 
                    </h3>
                    </center>
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Username" name="usrnm" required>
                    </div>

                    <div class="input-container">
                        <i class="fa fa-envelope icon"></i>
                        <input class="input-field" type="text" placeholder="Email" name="email" required>
                    </div>

                    <div class="input-container">
                        <i class="fa fa-phone icon"></i>
                        <input type="text" class="input-field" placeholder="Phone Number" name="phone" required>
                    </div>
                    
                    <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input class="input-field" type="password" placeholder="Password" name="psw" required>
                    </div>

                    <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input class="input-field" type="password" placeholder="Password Again" name="psw2" required>
                    </div>

                    <p id="register-p">By creating an account you agree to our <a href="#">Terms & Privacy</a></p>

                    <button type="submit" class="btn">Register</button>
                </form>

                    <p class="signin">Already have an account? <a href="login.php">Sign in</a></p>
                                
              </div>
            </div>
          </div>
        </div> <!-- .section -->
      
        <?php include('./includes/footer.php') ?>

    </div>
  </body>
</html>