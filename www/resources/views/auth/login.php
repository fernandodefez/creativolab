<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title> Iniciar sesión </title>

   <link href="/assets/core/fontawesome/all.min.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
   rel="stylesheet">

   <link href="/assets/core/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-white">

   <div class="container">
      <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-10 col-md-9">

               <div class="card o-hidden border-0 my-3">
                  <div class="card-body p-0">
                        <div class="row">
                           <div class="col-lg-8 col-xl-6 col-md-10 col-12 mx-auto">
                              <div class="p-2 p-md-4 p-lg-5">
                                    <div class="text-center">
                                       <h1 class="h4 text-gray-900 mb-5 font-weight-bold">
                                          Bienvenido de nuevo!
                                       </h1>
                                    </div>
                                    <form class="user" action="/login" method="POST">
                                       <div class="form-group">
                                          <label for="Email" class="text-gray-800 font-weight-bold">
                                                Correo electrónico
                                          </label>
                                          <input type="text" class="form-control
                                          <?php
                                          if (
                                                isset($errors) &&
                                                isset($errors['email_error']) &&
                                                !empty($errors['email_error'])
                                          ) {
                                             echo 'is-invalid';
                                          } else {
                                             echo '';
                                          }
                                          ?>" 
                                          <?php
                                          if (isset($data) && isset($data['email_value'])) {
                                             echo "value='" . $data['email_value'] . "'";
                                          }
                                          ?> 
                                          id="Email" placeholder="Correo electrónico" name="email">
                                          <?php
                                          if (isset($errors) && isset($errors['email_error'])) {
                                             echo "<div class='invalid-feedback'>" . $errors['email_error'] . "</div>";
                                          }
                                          ?>
                                       </div>
                                       <div class="form-group">
                                          <label for="Password" class="text-gray-800 font-weight-bold">
                                                Contraseña
                                          </label>
                                          <input type="password" class="form-control
                                          <?php
                                          if (
                                                   isset($errors) &&
                                                   isset($errors['password_error']) &&
                                                   !empty($errors['password_error'])
                                          ) {
                                             echo 'is-invalid';
                                          } else {
                                             echo '';
                                          }
                                          ?>" 
                                          id="Password" placeholder="Contraseña" name="password">
                                          <?php
                                          if (isset($errors) && isset($errors['password_error'])) {
                                             echo "<div class='invalid-feedback'>" . $errors['password_error'] . "</div>";
                                          }
                                          ?>
                                       </div>
                                       <button type="submit" class="btn btn-primary btn-block font-weight-bold">
                                          Iniciar sesión
                                       </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                       <a class="small" href="<?php echo $_ENV['APP_URL'] ?>">
                                          ¿Has olvidado tu contraseña?
                                       </a>
                                    </div>
                                    <div class="text-center">
                                       <a class="small" href="<?php echo $_ENV['APP_URL'] . '/register'?>">
                                          Crear cuenta
                                       </a>
                                    </div>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
            </div>
      </div>
   </div>
</body>

</html>