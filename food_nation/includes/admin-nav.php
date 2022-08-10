<?php 
    session_start();
    
    //it will redirect to login page if we access the admin or user home page directly without login.
    //it will redirect to login page if we access admin page with user account, or vice-versa.
    if(!isset($_SESSION['username'])){
        $_SESSION['failedToAccessAdminPage_1'] = "You cannot access the admin homepage without logging ";
        header("location:login.php");
    }
    elseif($_SESSION['usertype']=='user'){
        $_SESSION['failedToAccessAdminPage_2'] = "You are not allowed to access the Admin Homepage using User account,Please log in to admin account";
        header("location:login.php");
    }
?>

    <div class="site-wrap">
  
  <nav class="site-menu" id="ftco-navbar-spy">
        <div class="site-menu-inner" id="ftco-navbar">
          <ul class="list-unstyled">
          <?php 
            if(isset($_SESSION['username'])){
              echo '<li>Hi   '.$_SESSION["username"].'</li>';
            }  
             ?>
            <li><a href="admin-managerestaurants.php">Manage Restaurants</a></li>
            <li><a href="admin-viewbooking.php">Manage Reservations </a></li>
            <li><a href="admin-managecontacts.php">Manage Contacts</a></li>
            <li>
              <?php
              if(isset($_SESSION['loggedadmin'])){
                echo "<a href='logout.php'>Logout</a>";
              }else {
                echo "<a href='login.php'>Login</a>";
              }

              ?>

            </li>
          </ul>
        </div>
      </nav>

    </div>


