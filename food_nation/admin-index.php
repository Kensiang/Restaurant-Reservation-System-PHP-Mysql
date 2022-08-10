<?php
require_once "db.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Welcome to the Food Nation</title>
    <?php include('./includes/admin-header.php') ?>
	<style>
	h2{text-align:center;}
	</style>
  </head>

    <body class="bg-light">


            

        <div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-12 col-lg-8 section-heading">
                <h4 class="heading mb-5">FOOD NATION - Admin Login Page</h4>
				<?php include('.admin/admin-login.php') ?>
				
				
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