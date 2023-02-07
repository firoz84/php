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
                            <?php 
                            if(isset($_POST['submit'])){
                                $name=$_POST['name'];
                                $city=$_POST['city'];

                                $insert= mysqli_query($conts, "INSERT INTO city ( name, city ) VALUES ('$name', '$city')") ;
                                
                                if( $insert){
                                    echo 'insert success';
                                }

                            }
                            ?>
                            <div class="card-header text-center">
                            <h2>Firoz mahmud</h2>
                            </div>
                            <div class="card-body">
                               <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

                                    <div class="my-3">
                                        <label for="">Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="my-3">
                                        <label for="">select City</label>
                                        <select name="city" class="form-control">
                                            <option disabled selected>Select city</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Pabna">Pabna</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Sirajgonj">Sirajgonj</option>

                                        </select>
                                    </div>
                                   <div class="my-3">
                                    <input type="submit" value="submit" name="submit" class="btn btn-primary w-100">
                                   </div>

                                </form>
                                <table class="table table-striped">
                                    <tr>
                                        <th>name</th>
                                        <th>city</th>
                                        <th>Actions</th>

                                    </tr>
                                    <?php 
                                        $get= mysqli_query( $conts, " SELECT * FROM city");
                                        $count= mysqli_num_rows($get);
                                        if($count > 0){
                                            while($row= mysqli_fetch_assoc($get)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['name'];?></td>
                                                    <td><?php echo $row['city'];?></td>
                                                    <td><a href="update.php?id=<?php echo $row['id'];?>">Edits</a></td>

                                                </tr>
                                                <?php
                                            }

                                        }else{
                                            echo 'no data';
                                        }
                                        die();
                                    ?>
                                </table>
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