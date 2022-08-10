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

<!DOCTYPE html>

<html>

    <head>

        <title> PHP SELECT OPTIONS FROM DATABASE </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body class="bg-light">

    <body data-spy="scroll" data-target="#ftco-navbar-spy" data-offset="0">

    <div class="form-group col-md-4">
                      <label for="restauranttype" class="label">Restaurant</label>
                      <div class="form-field-icon-wrap">
                        <span class=""></span>
                        <select class="form-group col-md-4" name="name">
                            <?php foreach($result as $key => $value){ ?>
                                <option value="<?=$value['name'] ;?>"><?=$value['name'] ;?></option>
                            <?php } ?>
                        </select>
                      </div>
                    </div>
    </body>

</html>