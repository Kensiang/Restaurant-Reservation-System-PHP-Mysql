
<!doctype html>
<html lang="en">
  <head>
    <style>

          /* CSS */
          .button-53 {
            background-color: #3DD1E7;
            border: 0 solid #E5E7EB;
            box-sizing: border-box;
            color: #000000;
            display: flex;
            font-family: ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
            font-size: 1rem;
            font-weight: 700;
            justify-content: center;
            line-height: 1.75rem;
            padding: .75rem 1.65rem;
            position: relative;
            text-align: center;
            text-decoration: none #000000 solid;
            text-decoration-thickness: auto;
            width: 100%;
            max-width: 460px;
            position: relative;
            cursor: pointer;
            transform: rotate(-2deg);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            margin-left: auto;
  		    margin-right: auto;
          }

          .button-53:focus {
            outline: 0;
          }

          .button-53:after {
            content: '';
            position: absolute;
            border: 1px solid #000000;
            bottom: 4px;
            left: 4px;
            width: calc(100% - 1px);
            height: calc(100% - 1px);
          }

          .button-53:hover:after {
            bottom: 2px;
            left: 2px;
          }

          @media (min-width: 768px) {
            .button-53 {
              padding: .75rem 3rem;
              font-size: 1.25rem;
            }
          }          
          h3 {
          text-align: center;
          }

  </style>
    <title>Welcome to the Food Nation</title>
    <?php include('./includes/admin-header.php') ?>
  </head>

    <body class="bg-light">

    <body data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">
      
    <?php include('./includes/admin-nav.php') ?>

            

        <div class="section pb-3 bg-white" id="section-about" data-aos="fade-up">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-md-12 col-lg-8 section-heading">
                <h3 class="heading mb-5">Admin Overview</h3>
                <br><br><a href="admin-managerestaurants.php" class="button-50"><button class="button-53" role="button">Manage restaurant</button>

                <br><br><a href="admin-managecontacts.php" class="button-50"><button class="button-53" role="button">manage contacts</button>

                <br><br><a href="admin-viewbooking.php" class="button-50"><button class="button-53" role="button">manage reservation</button>

                </div>
            </div>
          </div>
        </div>

        

      
        <?php include('./includes/footer.php') ?>

    </div>
  </body>
</html>