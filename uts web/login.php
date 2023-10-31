<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/login.css">
    <title>LOGIN</title>
  </head>
  <body>

    <section>
        <div class="container mt-5 pt-5">
          
           <div class="row">            
            <img src="asset/amikom.png" class="image-size">
              <h1 class="card-title text-center"><b>Login</b></h1>
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card border-0 shadow">
                        <div class="card-body">
                            <form action="php/con_login.php" method="POST">
                                <input type="text" name="username" id="username" class="form-control my-4 py-2" placeholder="Username">
                                <input type="text" name="password" id="password" class="form-control my-4 py-2" placeholder="Password">
                                <a href="register.php" class="nav-link">Belum punya akun?</a>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>