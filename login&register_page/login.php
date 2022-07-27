<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login Form</title>

<link rel="stylesheet" type="text/css" href="sty.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
			
				<center>
                <h1>Welcome to the Restaurant</h1>    
                
                <h2>Login Form</h2>
                    	
                    <h4>
                        <?php 
                        error_reporting(0);
                        session_start();
                        session_destroy();
                        ?>
		    // all the session message will be showing here.
                    <div class="session">   
                    <?php    
                        echo $_SESSION['loginMessage'];

                        if(isset($_SESSION['registered'])){
                            echo $_SESSION['registered'];
                            unset($_SESSION['registered']);
                        }
                    ?>
                    </div> 
                    </h4>
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

</body>
</html>

