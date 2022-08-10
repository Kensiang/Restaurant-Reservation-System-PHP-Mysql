<?php
  
  require_once('db_connect.php');

//  If POST request contain action (fetch_data) the execute the below block of code
  if (isset($_POST['action'])) {
    
    // select all the Published Product
    $sql = "Select * from products WHERE is_published=true
   ";
    
    //check if the price filter is set the filter the product between the min & max price (keep the Previous Filter if Present)
    if (isset($_POST['min_price'], $_POST['max_price']) && !empty($_POST['max_price']) && !empty($_POST['min_price'])) {
      $sql .= "
         AND price BETWEEN '" . $_POST['min_price'] . "' AND '" . $_POST['max_price'] . "'
        ";
    }
    //check if the at least one review is select the filter the product by review (keep the Previous Filter if Present)
    if (isset($_POST['review'])) {
      $review = implode("','", $_POST['review']);
      $sql .= "
      AND review IN('" . $review . "')
      ";
      
    }
    //check if the bookable is select the filter the product which are online bookable (keep the Previous Filter if Present)
    if (isset($_POST['bookable'])) {
      
      $bookable_filter = implode("','", $_POST['bookable']);
      $sql .= "
      AND bookable IN('" . $bookable_filter . "')
      ";
    }
    //check if the at least one cuisine is select the filter the product by cuisine (keep the Previous Filter if Present)
    if (isset($_POST['cuisine'])) {
      
      $cuisine_filter = implode("','", $_POST['cuisine']);
      $sql .= "
      AND cuisine IN('" . $cuisine_filter . "')
      ";
    }
    
    $query = mysqli_query($conn, $sql);
    $no_of_rows = mysqli_num_rows($query);
    $output = '';
    
    if ($no_of_rows > 0) {
      while ($res = mysqli_fetch_assoc($query)) {
        $output .= '
        <div class="row">
                  <div class="col s12">
                    <div class="card animate fadeUp">
                      <div class="card-content">
                        <div class="row">
                          <div class="col s2">
                            <img src="images/' . $res['img'] . '" class="responsive-img" alt="' . $res["name"] . '">
                          </div>
                          <div class="col s10">
                            <p class="food-title">' . $res['name'] . '</p>
                            
                            <ul class="restaurant_info">
                              <li class="info_name">' . $res['location'] . '</li>
                              <li class="res_price">' . $res['resturant'] . ' . <span
                                  style="font-weight:bold;color: rgba(58, 67, 84, 0.9);">$$</span>' . $res['price'] . '
                              </li>
                              <li class="res_review"> <strong>Review: </strong> ' . $res['review'] . ' / 5
                              </li>
                            </ul>
                            <br>
                            <br>
                            <div class="row mt-10">
                              <div class="col s8">
                              </div>
                              <div class="col s8">
                                <a href="reservationbooking.php" class="waves-effect waves-light btn gradient-45deg-deep-purple-blue z-depth-4 white">Reserve
                                  Now</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        ';
      }
    } else {
      $output = '<h3>No Product Found</h3>';
    }
    echo $output;
  }