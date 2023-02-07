<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="form-area my-5">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h2>How to submit form</h2>
                    </div>
                    <div class="card-body">
                       <form action="receive.php" method="POST">

                       <div class="my-3">
                          <input type="text" name='name' class="form-control">
                        </div>
                        <div class="my-3">
                          <input type="email" name='email' class="form-control">
                        </div>
                        <div class="my-3">
                          <input type="password" name='password' class="form-control">
                        </div>
                        <div class="my-3">
                          <textarea name="message" class="form-control" id="" cols="30" rows="6"></textarea>
                        </div>
                        <div class="my-3">
                          <input type="number" name='phone' class="form-control">
                        </div>
                        <div class="my-3">
                          <input type="submit" name='submit' class="btn btn-primary w-100">
                        </div>
                       </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>