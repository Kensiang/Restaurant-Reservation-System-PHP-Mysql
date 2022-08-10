  

    <div class="site-wrap">
  

    
  <nav class="site-menu" id="ftco-navbar-spy">
  <div class="site-menu-inner" id="ftco-navbar">
          <ul class="list-unstyled">
          <?php 
            session_start();
            if(isset($_SESSION['username'])){
              echo '<li>Hi   '.$_SESSION["username"].'</li>';
            }  
             ?>
            <li><a href="index.php#section-home">Home</a></li>
            <li><a href="index.php#section-about">About Us</a></li>
            <li><a href="index.php#section-home">Browse Restaurant</a></li>
            <li><a href="reservationbooking.php">Reserve A Table</a></li>
            <li><a href="index.php#section-contact">Contact</a></li>
            <li>
              <?php
              if(isset($_SESSION['logged'])){
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


