    
    <?php 
    
   if(isset($_POST['submit'])){

        $error=[];

        $name= $_POST['name'];
        $email= $_POST['email'];
        $pass= $_POST['password'];
        $message= $_POST['message'];

        $checke=$_POST['vote'];

       if(empty($_POST['color'])){
        $error['color']='please choose a color';
       }
        
   }

    
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
        <link rel="stylesheet" href="style.css">

    </head>

    <body>
        <div class="header-area my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow p-2">
                            <form action="" method="POST">
                                <div class="my-4 ">
                                    <label for="">name</label>
                                    <input type="text" class='form-control' name='name' placeholder='your name' value="<?php if(isset($name)){echo $name;};?>" />
                                    <span><?php 
                                    if(empty($name)){
                                        echo 'Your name is required';
                                    }
                                    ?></span>
                                </div>
                                <div class="my-4">
                                    <label for="">email</label>
                                    <input type="text" class='form-control' value="<?php if(isset($email)){echo $email;};?>"  name='email' placeholder='your email' />
                                    <span><?php 
                                    if(empty($email)){
                                        echo 'Your emial is required';
                                    }
                                    ?></span>
                                </div>
                                <div class="my-4">  
                                    <label for="">password</label>
                                    <input type="text" class='form-control' name='password' value="<?php if(isset($pass)){echo $pass;};?>"  placeholder='your password' />
                                    <span><?php 
                                    if(empty($pass)){
                                        echo 'Your password is required';
                                    }
                                    ?></span>
                                </div>
                                <div class="my-4">
                                    <label for="">message</label>
                                    <textarea  class='form-control'  name="message" id="" cols="30" rows="4"><?php if(isset($message)){echo $message;};?></textarea>
                                    <span><?php 
                                    if(empty($message)){
                                        echo 'Your message is required';
                                    }
                                    ?></span>
                                </div>
                                <div class="my-3">
                                    
                                    <input type="radio" name='vote'  <?php if(isset($_POST['vote']) && $_POST['vote']== 'yes'){echo "checked";};?> value="yes">Yes
                                    <br/>
                                    <input type="radio" name='vote'  <?php if(isset($_POST['vote']) && $_POST['vote']== 'NO'){echo "checked";};?> value="NO">No
                                    <br/>
                                    <input type="radio" name='vote'  <?php if(isset($_POST['vote']) && $_POST['vote']== 'N?A'){echo "checked";};?> value="N?A">N/A
                                    <br/>

                                   <span><?php 
                                    if(empty($_POST['vote'])){
                                        echo 'please choose a vote';
                                    }
                                    ?></span>
                                </div>
                                <div class="my-3">
                                <select class="form-select" aria-label="Default select example" name="color">
                                    <option selected>Open this select menu</option>
                                    <option value="red" <?php if(isset($_POST['color']) && $_POST['color']=="red"){echo "selected";}?>>Red</option>
                                    <option value="blue"<?php if(isset($_POST['color']) && $_POST['color']=="blue"){echo "selected";}?>>Blue</option>
                                    <option value="green"<?php if(isset($_POST['color']) && $_POST['color']=="red"){echo "selected";}?> >Green</option>
                                </select>
                                <br/>
                                <span>
                                  <?php 
                                  if(isset( $error['color'])){
                                    echo  $error['color'];
                                  }
                                  ?>
                                </span>
                                </div>
                                
                                <div class="my-4">
                                    <input type="submit" name="submit" value='submit' class='btn btn-primary w-100'>
                                </div>

                               
                            </form>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    </body>

    </html>