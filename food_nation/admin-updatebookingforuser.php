<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "food_nation";
$conn=mysqli_connect($servername,$username,$password,"$dbname");


$select = "SELECT * FROM `products`";
$result = mysqli_query($conn,$select);
$message = '';


?>

<!doctype html>

<html lang="en">
  <head>
    <title>Welcome to the Food Nation</title>
    <?php include('./includes/admin-header.php') ?>
    <style>
      h2 {text-align:center;}
      h1 {text-align:center; }
    </style>
  </head>

    <body class="bg-light">

    <body data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">
      
    <?php include('./includes/nav.php') ?> 

            

        <div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-12 col-lg-8 section-heading">

              </div>
            </div>
          </div>
        </div> <!-- .section -->
        
        <div class="section" data-aos="fade-up" id="section-contact">
          <div class="container">
            <div class="row section-heading justify-content-center mb-5">
              <div class="col-md-8 text-center">
                <h2 class="heading mb-3">Updates For User Reservation</h2>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-10 p-5 form-wrap">
                <form method="post" action="admin-process.php">
                  <div class="row mb-4">
                    <div class="form-group col-md-4">
                      <label for="name" class="label">Name</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-person"></span>
                        <input type="text" class="form-control" name="name" required maxlength="45">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="email" class="label">Email</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-email"></span>
                        <input type="email" class="form-control" name="email" required maxlength="50">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="phone" class="label">Phone</label>
                      <div class="form-field-icon-wrap">
                        <span class="icon ion-android-call"></span>
                        <input type="text" class="form-control" name="phone" required maxlength="8">
                      </div>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="time" class="label">Date & Time</label>
                      <div class="form-field-icon-wrap">
                        <input type="datetime-local" value="2022-08-08T19:30" min="2022-08-08T09:00" max="2022-08-31T22:00" class="form-control" name="time">
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="restauranttype" class="label">Restaurant</label>
                      <div class="form-field-icon-wrap">
                        <span class=""></span>
                        <select name="restauranttype">
                            <?php foreach($result as $key => $value){ ?>
                                <option value="<?=$value['name'] ;?>"><?=$value['name'] ;?></option>
                            <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="pax" class="label">Pax</label> 
                      <div class="form-field-icon-wrap">
                        <span class=""></span>
                        <select name="pax" class="form-field-icon-wrap" required maxlength="8">
                            <option value="">Select Pax Amount</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="2">3</option>
                            <option value="2">4</option>
                            <option value="2">5</option>
                            <option value="2">6</option>
                            <option value="2">7</option>
                            <option value="2">8</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-md-4">
                      <input type="submit" class="btn btn-primary btn-outline-primary btn-block" value="submit" name="booknow">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      
        <?php include('./includes/footer.php') ?>

    </div>

    <script>
      function myFunction() {
        var x = document.getElementById("myTime").min = "16:00";
        document.getElementById("demo").innerHTML = "The value of the min attribute was changed from '20:00' to '16:00'.";
      }

      function validateForm() {
      let x = document.forms["name"]["fname"].value;
      if (x == "") {
        alert("Name must be filled out");
        return false;
      }
      }
  </script>
  </body>
</html>