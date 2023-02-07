<?php 

$conts= mysqli_connect('localhost','root', '', 'db');
?>



<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="product-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h2>Product filter</h2>
                        </div>
                        <div class="card-body">
                            <form action="" method="GET">
                                <div class="row">
                                <div class="col-md-4 ">
                                    <input type="number" name="from_price" class="form-control" value="" placeholder="product name">
                                </div>
                                <div class="col-md-4 ">
                                    <input type="number" name="to_price" class="form-control" value="" placeholder="price">
                                </div>
                                <div class="col-md-4 ">
                                    <input type="submit" name="filter" value="filter" class="btn btn-primary w-100" >
                                </div>
                                </div>
                                <br>
                            <br>
                            <div class="card">
                                <div class="card-header">
                                    Product
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <?php 
                                        if(isset($_GET['from_price']) && isset($_GET['to_price'])) {
                                                $name=$_GET['from_price'];
                                                $number=$_GET['to_price'];

                                               $products=mysqli_query($conts, "SELECT * FROM products WHERE price BETWEEN  '$name' AND '$number'");
                                               
                                                while($row=mysqli_fetch_assoc($products)){
                                                    
                                                ?>
                                                <div class="col-md-4">
                                                        <h2>name :<?php echo $row['name'];?></h2>
                                                        <h4>Price :<?php echo $row['price'];?></h4>
                                                    </div>
                                                <?php
                                                    
                                                }

                                        }
                                        ?>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            </form>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>