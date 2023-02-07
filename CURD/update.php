<?php

    $conts= mysqli_connect('localhost','root', '', 'curd');
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
  <header>
    <!-- place navbar here -->
  </header>
    <main>
        <div class="main-area my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                           
                            <div class="card-header text-center">
                            <h2>Firoz mahmud</h2>
                            </div>
                            <div class="card-body">
                                <?php 
                                $id= $_GET['id'];
                                $info= mysqli_query( $conts, "SELECT * FROM city WHERE id='$id'");

                                $row= mysqli_fetch_assoc($info);
                              
                                ?>
                               <form action="" method="POST">
                                    <input type="hidden" name="update_id" value="<?php echo $id;?>">
                                    <div class="my-3">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control" value="<?php echo $row['name'];?>">
                                    </div>
                                    <div class="my-3">
                                        <label for="">select City</label>
                                        <select name="city" class="form-control">
                                            
                                            <option value="Dhaka" <?php if($row['city']== 'Dhaka'){echo 'Selected';}?> >Dhaka</option>
                                            <option value="Pabna" <?php if($row['city']== 'Pabna'){echo 'Selected';}?> >Pabna</option>
                                            <option value="Rajshahi"  <?php if($row['city']== 'Rajshahi'){echo 'Selected';}?> >Rajshahi</option>
                                            <option value="Khulna" <?php if($row['city']== 'Khulna'){echo 'Selected';}?> >Khulna</option>
                                            <option value="Sirajgonj" <?php if($row['city']== 'Sirajgonj'){echo 'Selected';}?> >Sirajgonj</option>

                                        </select>
                                    </div>
                                   <div class="my-3">
                                    <input type="submit" value="Update" name="submit" class="btn btn-primary w-100">
                                   </div>

                                   <?php 
                                   if(isset($_POST['submit'])){
                                    $update_id= $_POST['update_id'];
                                    $name=$_POST['name'];
                                    $city=$_POST['city'];
                                    $update=mysqli_query( $conts, "UPDATE city SET name= '$name', city= '$city' WHERE id='$update_id'");

                                    if($update){
                                        header("location : select.php");
                                       }
                                   }
                                   
                                   ?>

                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>