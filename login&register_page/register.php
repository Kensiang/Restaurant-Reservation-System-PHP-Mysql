<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="sty.css">
<title>Register Form</title>

</head>
<body>

<form action="register_check.php" method="POST" style="max-width:500px;margin:auto">
  <center><h2>Register Form</h2></center>
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
    <input type="text" class="input-field" placeholder="Phone Number(Optional)" name="phone">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw" required>
  </div>
  <p id="register-p">By creating an account you agree to our <a href="#">Terms & Privacy</a></p>

  <button type="submit" class="btn">Register</button>
</form>

<p class="signin">Already have an account? <a href="login.php">Sign in</a></p>

</body>
</html>

