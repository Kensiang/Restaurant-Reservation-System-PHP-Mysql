<?php
  require_once('backend/db_connect.php');
?>
<!doctype html>
<html lang="en">
<head>
  <title>Welcome to the Food Nation</title>

  <style>
      .titlecenter {
    margin: auto;
    width: 100%;
    height: 100%;
    padding: 10px;
    text-align: center;
    }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta name="author" content=""/>
  
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700"
        rel="stylesheet">
  
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/aos.css">
  
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  
  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/noUiSlider/nouislider.min.css">
  
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/cards-basic.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/style.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-modern-menu-template/materialize.css">
  <!-- Theme Style -->
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/ionRangeSlider/css/ion.rangeSlider.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/ionRangeSlider/css/ion.rangeSlider.skinFlat.css">
  
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/eCommerce-products-page.css">
  <link rel="stylesheet" href="css/style.css">
  
  <style>
    /*chips input display none*/
    .chips input.input {
      display: none !important;
    }
  </style>
</head>

<body class="bg-light" data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">


<?php include('./includes/nav.php');?>
  
  <header class="site-header">
    <div class="row align-items-center">
      <div class="col-5 col-md-3">
      
      </div>
      <div class="col-2 col-md-6 text-center site-logo-wrap">
        <a href="index.php" class="site-logo">FOOD NATION</a>
      </div>
      <div class="col-5 col-md-3 text-right menu-burger-wrap">
        <a href="#" class="site-nav-toggle js-site-nav-toggle"><i></i></a>
      
      </div>
    </div>
  
  </header> <!-- site-header -->
  
  <div class="main-wrap " id="section-home">
    
  <div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-12 col-lg-8 section-heading">
                <div class="titlecenter">
                  <h2 class="heading mb-5">Reserve table for your favourite restaurant today!</h2>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- .cover_1 -->
    <div class="row">
      <div class="container">
        <div class="col s4">
          <div class="card">
            <div class="card-content">
              <p class="title-card">Filtered by:<span class="reset">Clear all</span></p>
              <div class="chips chips-initial">
              </div>
              <hr>
              <div class="filter-box-cuisine">
                <p class="cuisine-title title-card">Cuisine</p>
                <?php
                  /*Select all the rows with different cuisine from the products*/
                  $sql = "SELECT DISTINCT cuisine FROM products ORDER BY id DESC";
                  $query = mysqli_query($conn, $sql);
                  while ($result = mysqli_fetch_assoc($query)) {
                    ?>
                    <p>
                      <label>
                        <input type="checkbox" class="filter-checked cuisine filled-in"
                               value="<?= $result['cuisine'] ?>" data-value="Cuisine: <?= $result['cuisine'] ?>"/>
                        <span><?= $result['cuisine'] ?></span>
                      </label>
                    </p>
                  <?php } ?>
                <div class="show-more">Show more</div>
              </div>
              <hr>
              <div class="filter-box-review score">
                <p class="cuisine-title title-card">Review score</p>
                <form action="#" class="display-grid">
                  <?php for ($i = 1; $i <= 5; $i++) { ?>
                    <label>
                      <input type="checkbox" class="filter-checked review" data-value="Review:<?= $i ?> Star"
                             value="<?= $i ?>"/>
                      <span>
                      <?php for ($y = 1; $y <= $i; $y++) { ?>
                        <i class="material-icons amber-text"> star </i>
                      <?php } ?>
                    </span>
                    </label>
                    <?php
                  } ?>
                
                </form>
              </div>
              <hr>
              <div class="filter-box-price">
                <p class="cuisine-title title-card">Price</p>
                <input type="hidden" id="min_price" class="price__range" value="0">
                <input type="hidden" id="max_price" class="price__range" value="1000">
                <input type="text" id="price_rang" min="0"/>
              </div>
              <hr>
              <div class="row filter-box-bookable">
                <p class="col s9 title-card" style="line-height: 35px">Bookable online<span
                    class="book_switch">
                <div class="switch  col s3">
                  <label>
                    <input type="checkbox" class="checkbox filter-checked booking" value="1"
                           data-value="bookable-online">
                    <span class="lever"></span>
                  </label>
                </div>
                </span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col s8">
          <div class="card">
            <div class="card-content">
              <div id="ecommerce-products">
                <!--Product Load here Dynamically From database for more info check backend/filter.php -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="ftco-footer">
        <div class="container">
          
          <div class="row">
            <div class="col-md-4 mb-5">
              <div class="footer-widget">
                <h3 class="mb-4">Location</h3>
                <p>465 Upper East Coast Rd, Singapore 466508</p>
                <p>707 Collyer Quay Coast, Singapore 049315</p>
                <p>35 Robinson Rd, Singapore 068876</p>
                <!-- <input type="submit" class="btn btn-primary btn-outline-primary" value="Send Message"> -->
                <p><a href="" target="_blank" class="btn btn-primary btn-outline-primary">Contact Us</a>
                </p>
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <div class="footer-widget">
                <h3 class="mb-4">Opening Hours</h3>
                <p>Booking from 10:00am &mdash; 10:00pm</p>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="footer-widget">
                <h3 class="mb-4">Follow Along</h3>
                <ul class="list-unstyled social">
                  <li><a href="#"><span class="fa fa-tripadvisor"></span></a></li>
                  <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                  <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                </ul>
              </div>
              <div class="footer-widget">
                <h3 class="mb-4">Newsletter</h3>
                <form action="#" class="ftco-footer-newsletter">
                  <div class="form-group">
                    <button class="button"><span class="fa fa-envelope"></span></button>
                    <input type="email" class="form-control" placeholder="Enter Email">
                  </div>
                </form>
              </div>
            </div>
          
          </div>
          
          <div class="row pt-5">
            <div class="col-md-12 text-center">
              <p>&copy; Copyright 2022.</p>
            </div>
          </div>
        </div>
      </footer>
    
    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#ff7a5c"/>
      </svg>
    </div>
    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    
    <script src="js/jquery.easing.1.3.js"></script>
    
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
    
    <script src="app-assets/vendors/noUiSlider/nouislider.min.js"></script>
    
    <script src="app-assets/js/vendors.min.js"></script>
    
    <script src="app-assets/js/plugins.js"></script>
    <script src="app-assets/js/search.js"></script>
    <script src="app-assets/js/custom/custom-script.js"></script>
    <script src="app-assets/js/scripts/customizer.js"></script>
    
    <script src="app-assets/vendors/ionRangeSlider/js/ion.rangeSlider.js"></script>
    <script src="app-assets/js/scripts/advance-ui-modals.js"></script>
    <script src="app-assets/js/scripts/eCommerce-products-page.js"></script>
    
    <script type="text/javascript">
      if ($('.filled-in').length > 6) {
        $('.filled-in:gt(5)').parent().parent().hide();
        $('.show-more').show();
      }
      
      $('.show-more').on('click', function () {
        $('.filled-in:gt(5)').parent().parent().fadeToggle('slow');
        $(this).text() === 'Show more' ? $(this).text('Show less') : $(this).text('Show more');
      });
      
      
      //  Filter data through Ajax
      $(document).ready(function () {
        filter_data();
        
        function filter_data(price = null) {
          // Initial Loading Icon
          $('#ecommerce-products').html(`<div id="loader" class="show" style="position: relative;margin-top: 100px;">
                                              <svg class="circular" width="48px" height="48px">
                                                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
                                                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                                                        stroke="#ff7a5c"/>
                                              </svg>
                                          </div>`)
          let action = 'fetch_data';
          let min_price = Number($('#min_price').val());
          let max_price = Number($('#max_price').val());
          let cuisine = get_filter('cuisine')
          let review = get_filter('review')
          let bookable = get_filter('booking')
          filterByBox(price)
          
          $.ajax({
            url: 'backend/filter.php',
            method: 'POST',
            data: {
              action: action,
              min_price: min_price,
              max_price: max_price,
              cuisine: cuisine,
              review: review,
              bookable: bookable
            },
            success: function (data) {
              $('#ecommerce-products').html(data)
            },
            error: function (error) {
              console.log(error)
            }
          })
        }
        
        /* get_filter function return the value of the checkbox in a array for to be use in filter.php
        * params class_name for selecting the checkbox
        * */
        function get_filter(class_name) {
          let filter = [];
          $('.' + class_name + ':checked').each(function () {
            filter.push($(this).val());
          });
          return filter;
        }
        
        
        /*
        this function is responsible for clearing filter from the filter box
        Params: price default value null
        */
        function filterByBox(price = null) {
          let filterChip = []
          $('.filter-checked:checked').each(function () {
            //Here we loop through all the checked checkboxes and put the data-value object into filterChip array
            filterChip.push({
              tag: $(this).attr('data-value')
            })
          })
          // check if the price range has been selected or not
          if (price !== null) {
            filterChip.push({ // push the value of price object to filterChip array
              tag: price
            })
          }
          
          let filter_chip = $('.chips').chips({
            data: filterChip,
            onChipDelete: function (e, data) {
              // selecting the checkbox the we remove from the filterbox
              $(`.filter-checked[data-value="${data.childNodes[0].textContent}"]`).prop('checked', false)
              
              if (price !== null) {
                $('#min_price').val(0);
                $('#max_price').val(1000)
                $('#price_rang').data('ionRangeSlider').reset();
              }
              filter_data()
            }
          });
        }
        
        //  Remove all the Filters
        $('.reset').on('click', function () {
          $('#min_price').val(0);
          $('#max_price').val(1000)
          $('#price_rang').data('ionRangeSlider').reset();
          $('.filter-checked').prop('checked', false)
          filter_data()
        })
        
        
        // Filter The data when clicked on a checkbox with filter-checked class (Applied To all Checkboxes
        $('.filter-checked').click(function () {
          filter_data();
        });
        
        //Price Slider Version 1
        $("#price_rang").ionRangeSlider({
          type: "double",
          grid: true,
          min: 0,
          max: 1000,
          form: 0,
          onFinish: function (data) {
            $('#min_price').val(data.from);
            $('#max_price').val(data.to)
            let price = `price: ${data.from} - ${data.to}`;
            filter_data(price)
          }
        });
        
        //Price Slider Version 2
        /*$("#price_rang").ionRangeSlider({
          type: "double",
          grid: true,
          from: 0,
          values: [
            "0", "100", "200", "300", '400', '500',
            '600', '700', '800', '900', '1000'
          ],
          onFinish: function (data) {
            $('#min_price').val(data.from_value);
            $('#max_price').val(data.to_value)
            let price = `price: ${data.from_value} - ${data.to_value}`;
            filter_data(price)
          }
        });*/
        
        
      });
    
    
    </script>
</body>
</html>
